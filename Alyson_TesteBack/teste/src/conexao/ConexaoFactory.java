package conexao;

import java.sql.Connection;
import java.sql.DriverManager;

public class ConexaoFactory {

	public Connection conectar() throws Exception{
		return DriverManager.getConnection(
				"jdbc:oracle:thin:@oracle.fiap.com.br:1521:ORCL","RM74636","011297");
		// LOGIN E SENHA PARA CONECTAR NO BANCO DE DADOS ENVIADO POR E-MAIL CASO QUEIRA TESTAS
	}
}