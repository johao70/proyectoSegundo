export class Detalle_reserva{

    private detalle_id: Number;
    private mesa_id: Number;
    private reserva_id: Number;
    private numerousuarios: Number;

    constructor($detalle_id: Number, $mesa_id: Number, $reserva_id: Number, $numerousuarios: Number){
        this.detalle_id = $detalle_id;
        this.mesa_id = $mesa_id;
        this.reserva_id = $reserva_id;
        this.numerousuarios = $numerousuarios;
    }
}