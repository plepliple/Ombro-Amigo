<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pais Model
 *
 * @method \App\Model\Entity\Pai get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pai newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pai[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pai|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pai patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pai[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pai findOrCreate($search, callable $callback = null, $options = [])
 */
class PaisTable extends Table
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

        $this->setTable('pais');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('sigla', 'create')
            ->notEmpty('sigla');

        return $validator;
    }
}
