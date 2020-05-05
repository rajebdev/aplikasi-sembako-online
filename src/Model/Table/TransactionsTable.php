<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Transactions Model
 *
 * @property \App\Model\Table\BuyersTable&\Cake\ORM\Association\BelongsTo $Buyers
 * @property \App\Model\Table\SellersTable&\Cake\ORM\Association\BelongsTo $Sellers
 * @property \App\Model\Table\TransactiondetailsTable&\Cake\ORM\Association\BelongsTo $Transactiondetails
 * @property \App\Model\Table\TransactionstatusTable&\Cake\ORM\Association\BelongsTo $Transactionstatus
 * @property \App\Model\Table\TransactionitemsTable&\Cake\ORM\Association\HasMany $Transactionitems
 *
 * @method \App\Model\Entity\Transaction get($primaryKey, $options = [])
 * @method \App\Model\Entity\Transaction newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Transaction[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Transaction|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Transaction saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Transaction patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Transaction[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Transaction findOrCreate($search, callable $callback = null, $options = [])
 */
class TransactionsTable extends Table
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

        $this->setTable('transactions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Buyers', [
            'foreignKey' => 'buyer_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Sellers', [
            'foreignKey' => 'seller_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Transactiondetails', [
            'foreignKey' => 'transactiondetail_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Transactionstatus', [
            'foreignKey' => 'transactionstatus_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Transactionitems', [
            'foreignKey' => 'transaction_id',
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
        $rules->add($rules->existsIn(['buyer_id'], 'Buyers'));
        $rules->add($rules->existsIn(['seller_id'], 'Sellers'));
        $rules->add($rules->existsIn(['transactiondetail_id'], 'Transactiondetails'));
        $rules->add($rules->existsIn(['transactionstatus_id'], 'Transactionstatus'));

        return $rules;
    }
}
