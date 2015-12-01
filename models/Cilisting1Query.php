<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Cilisting1]].
 *
 * @see Cilisting1
 */
class Cilisting1Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Cilisting1[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Cilisting1|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}