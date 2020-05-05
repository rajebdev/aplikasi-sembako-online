<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tscompletes Model
 *
 * @property \App\Model\Table\TransactionstatusTable&\Cake\ORM\Association\HasMany $Transactionstatus
 *
 * @method \App\Model\Entity\Tscomplete get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tscomplete newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tscomplete[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tscomplete|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tscomplete saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tscomplete patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tscomplete[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tscomplete findOrCreate($search, callable $callback = null, $options = [])
 */
class TscompletesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('tscompletes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Transactionstatus', [
            'foreignKey' => 'tscomplete_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmptyString('id', null, 'create');

        $validator
            ->requirePresence('date_status', 'create')
            ->notEmptyString('date_status');

        return $validator;
    }
}
