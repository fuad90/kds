<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Volunteer;

/**
 * VolunteerSearch represents the model behind the search form about `common\models\Volunteer`.
 */
class VolunteerSearch extends Volunteer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['volunteer_id', 'country_id', 'state_id', 'district_id', 'sub_base_id', 'cluster_id', 'kampung_id', 'enter_by'], 'integer'],
            [['date', 'day', 'time', 'nama', 'no_kp', 'jantina', 'alamat', 'poskod', 'tel_hp', 'tel_rumah', 'email', 'kerja_sukarelawan', 'persatuan', 'jawatan', 'tempoh', 'prog_kanak_kanak', 'prog_kemasyarakatan', 'prog_warga_emas', 'prog_oku', 'aktiviti_rekreasi', 'prog_kesihatan', 'prog_akademik', 'lain_lain', 'bahasa_melayu', 'bahasa_inggeris', 'bahasa_tamil', 'bahasa_cina', 'lain_lain_2', 'memiliki_kenderaan', 'bila_bila_masa', 'setiap_hari', 'cuti_am', 'fasilitator', 'fotografi', 'tenaga', 'lain_lain_3', 'nota_tambahan', 'date_enter'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Volunteer::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'volunteer_id' => $this->volunteer_id,
            'country_id' => $this->country_id,
            'state_id' => $this->state_id,
            'district_id' => $this->district_id,
            'sub_base_id' => $this->sub_base_id,
            'cluster_id' => $this->cluster_id,
            'kampung_id' => $this->kampung_id,
            'enter_by' => $this->enter_by,
        ]);

        $query->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'day', $this->day])
            ->andFilterWhere(['like', 'time', $this->time])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'no_kp', $this->no_kp])
            ->andFilterWhere(['like', 'jantina', $this->jantina])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'poskod', $this->poskod])
            ->andFilterWhere(['like', 'tel_hp', $this->tel_hp])
            ->andFilterWhere(['like', 'tel_rumah', $this->tel_rumah])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'kerja_sukarelawan', $this->kerja_sukarelawan])
            ->andFilterWhere(['like', 'persatuan', $this->persatuan])
            ->andFilterWhere(['like', 'jawatan', $this->jawatan])
            ->andFilterWhere(['like', 'tempoh', $this->tempoh])
            ->andFilterWhere(['like', 'prog_kanak_kanak', $this->prog_kanak_kanak])
            ->andFilterWhere(['like', 'prog_kemasyarakatan', $this->prog_kemasyarakatan])
            ->andFilterWhere(['like', 'prog_warga_emas', $this->prog_warga_emas])
            ->andFilterWhere(['like', 'prog_oku', $this->prog_oku])
            ->andFilterWhere(['like', 'aktiviti_rekreasi', $this->aktiviti_rekreasi])
            ->andFilterWhere(['like', 'prog_kesihatan', $this->prog_kesihatan])
            ->andFilterWhere(['like', 'prog_akademik', $this->prog_akademik])
            ->andFilterWhere(['like', 'lain_lain', $this->lain_lain])
            ->andFilterWhere(['like', 'bahasa_melayu', $this->bahasa_melayu])
            ->andFilterWhere(['like', 'bahasa_inggeris', $this->bahasa_inggeris])
            ->andFilterWhere(['like', 'bahasa_tamil', $this->bahasa_tamil])
            ->andFilterWhere(['like', 'bahasa_cina', $this->bahasa_cina])
            ->andFilterWhere(['like', 'lain_lain_2', $this->lain_lain_2])
            ->andFilterWhere(['like', 'memiliki_kenderaan', $this->memiliki_kenderaan])
            ->andFilterWhere(['like', 'bila_bila_masa', $this->bila_bila_masa])
            ->andFilterWhere(['like', 'setiap_hari', $this->setiap_hari])
            ->andFilterWhere(['like', 'cuti_am', $this->cuti_am])
            ->andFilterWhere(['like', 'fasilitator', $this->fasilitator])
            ->andFilterWhere(['like', 'fotografi', $this->fotografi])
            ->andFilterWhere(['like', 'tenaga', $this->tenaga])
            ->andFilterWhere(['like', 'lain_lain_3', $this->lain_lain_3])
            ->andFilterWhere(['like', 'nota_tambahan', $this->nota_tambahan])
            ->andFilterWhere(['like', 'date_enter', $this->date_enter]);

        return $dataProvider;
    }
}
