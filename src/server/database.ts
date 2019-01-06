import {Sequelize} from 'sequelize-typescript';
import { dbconfig } from '../server/config'; // DB parametros de conexión

export const sequelize = new Sequelize({
 database: dbconfig.database,
 dialect: dbconfig.dialect,
 username: dbconfig.username,
 password: dbconfig.password,
 host: dbconfig.host,
 port: dbconfig.port
});
sequelize.authenticate().then(() => {
 console.log("Conectado a la DB");
})
.catch((err) => {
 console.log(err);
})