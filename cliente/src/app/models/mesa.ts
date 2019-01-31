export class Mesa{

    private mesa_id: Number;
    private tipo_id: Number;
    private estado_id: Number;

    constructor($mesa_id: Number, $tipo_id: Number, $estado_id: Number){
        this.mesa_id = $mesa_id;
        this.tipo_id = $tipo_id;
        this.estado_id = $estado_id;
    }
}