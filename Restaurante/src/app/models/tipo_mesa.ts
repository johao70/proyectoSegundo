export class Tipo_mesa{

    private tipo_id: Number;
    private descripcion: String;
    private capacidad: String;

    constructor($tipo_id: Number, $descripcion: String, $capacidad: String){
        this.tipo_id = $tipo_id;
        this.descripcion = $descripcion;
        this.capacidad = $capacidad;
    }
}