<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CheckList extends JsonResource
{

    public function toArray($request)
    {
     
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'dataSolicitacao' => $this->dataSolicitacao,
            'cns' => $this->cns,
            'dn' => $this->dn,
            'idade' => $this->idade,
            'sexo' => $this->sexo,
            'cpf' => $this->cpf,
            'rg' => $this->rg,
            'orgaoEmissor' => $this->orgaoEmissor,
            'vacina' => $this->vacina,
            'ndoses' => $this->ndoses,
            'estado' => $this->estado,
            'diagnostico' => $this->diagnostico,
            'gestante' => $this->gestante,
            'nasceDestino' => $this->nasceDestino,
            'hospitalOrigem' => $this->hospitalOrigem,
            'LeitoOrigem' => $this->LeitoOrigem,
            'setorOrigem' => $this->setorOrigem,
            'medicoResponsavel' => $this->medicoResponsavel,
            'hospitalDestino' => $this->hospitalDestino,
            'LeitoDestino' => $this->LeitoDestino,
            'quemRecebe' => $this->quemRecebe,
            'padrao' => $this->padrao,
            'contato' => $this->contato,
            'motivoprec' => $this->motivoprec,
            'covid' => $this->covid,
            'metodo' => $this->metodo,
            'data' => $this->data,
            'sng' => $this->sng,
            'svd' => $this->svd,
            'dreno' => $this->dreno,
            'tottqd' => $this->tottqd,
            'acessoVenosoCentral' => $this->acessoVenosoCentral,
            'acessoVenosoPeriferico' => $this->acessoVenosoPeriferico,
            'outros' => $this->outros,
            'drogas' => $this->drogas,
            'sedacao' => $this->sedacao,
            'cateter' => $this->cateter,
            'mascara' => $this->mascara,
            'outroSu' => $this->outroSu,
            'vm' => $this->vm,
            'espOutroSu' => $this->espOutroSu,
            'fiO2' => $this->fiO2,
            'modVent' => $this->modVent,
            'peep' => $this->peep,
            'spO2' => $this->spO2,
            'prona' => $this->prona,
            'volume' => $this->volume,
            'pressao' => $this->pressao,
            'risco' => $this->risco,
            'aguda' => $this->aguda,
            'pps' => $this->pps,
            'pa' => $this->pa,
            'fc' => $this->fc,
            'spo2c' => $this->spo2c,
            'glasgow' => $this->glasgow,
            'temp' => $this->temp,
            'peso' => $this->peso,
            'altura' => $this->altura,
            'outrosIC' => $this->outrosIC,
            'fr' => $this->fr,
            'hgt' => $this->hgt,
            'comorbidades' => $this->comorbidades,
            'historicoClinico' => $this->historicoClinico,
            'efisico' => $this->efisico,
            'eComplementar' => $this->eComplementar,
            'usuario' => $this->usuario,
            'preenchimento' => $this->preenchimento,
            'horaPreenchimento' => $this->horaPreenchimento,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];

    }
}










