<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Transactionstatus Model
 *
 * @property \App\Model\Table\TswaitsTable&\Cake\ORM\Association\BelongsTo $Tswaits
 * @property \App\Model\Table\TspaidsTable&\Cake\ORM\Association\BelongsTo $Tspaids
 * @property \App\Model\Table\TsprocessesTable&\Cake\ORM\Association\BelongsTo $Tsprocesses
 * @property \App\Model\Table\TssendsTable&\Cake\ORM\Association\BelongsTo $Tssends
 * @property \App\Model\Table\TsreceivesTable&\Cake\ORM\Association\BelongsTo $Tsreceives
 * @property \App\Model\Table\TscompletesTable&\Cake\ORM\Association\BelongsTo $Tscompletes
 * @property \App\Model\Table\TscancelsTable&\Cake\ORM\Association\BelongsTo $Tscancels
 * @property \App\Model\Table\TransactionsTable&\Cake\ORM\Association\HasMany $Transactions
 *
 * @method \App\Model\Entity\Transactionstatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Transactionstatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Transactionstatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Transactionstatus|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Transactionstatus saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Transactionstatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Transactionstatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Transactionstatus findOrCreate($search, callable $callback = null, $options = [])
 */
class TransactionstatusTable extends Table
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

        $this->setTable('transactionstatus');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tswaits', [
            'foreignKey' => 'tswait_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Tspaids', [
            'foreignKey' => 'tspaid_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Tsprocesses', [
            'foreignKey' => 'tsprocess_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Tssends', [
            'foreignKey' => 'tssend_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Tsreceives', [
            'foreignKey' => 'tsreceive_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Tscompletes', [
            'foreignKey' => 'tscomplete_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Tscancels', [
            'foreignKey' => 'tscancel_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Transactions', [
            'foreignKey' => 'transactionstatus_id',
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['tswait_id'], 'Tswaits'));
        $rules->add($rules->existsIn(['tspaid_id'], 'Tspaids'));
        $rules->add($rules->existsIn(['tsprocess_id'], 'Tsprocesses'));
        $rules->add($rules->existsIn(['tssend_id'], 'Tssends'));
        $rules->add($rules->existsIn(['tsreceive_id'], 'Tsreceives'));
        $rules->add($rules->existsIn(['tscomplete_id'], 'Tscompletes'));
        $rules->add($rules->existsIn(['tscancel_id'], 'Tscancels'));

        return $rules;
    }
}
