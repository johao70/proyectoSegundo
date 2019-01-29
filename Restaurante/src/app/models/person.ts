export class Person{

    private pers_ci: Number;
    private nombre: String;
    private telefono: String;
    private correo: String;
    private clave: String;

    constructor($pers_ci: Number, $nombre: String, $telefono: String, $correo: String, $clave: String){
        this.pers_ci = $pers_ci;
        this.nombre = $nombre;
        this.telefono = $telefono;
        this.correo = $correo;
        this.clave = $clave;
    }
}