package excecao;

import java.sql.SQLException;
import java.sql.SQLIntegrityConstraintViolationException;
import java.sql.SQLSyntaxErrorException;

public class Excecao extends Exception {

	public static String tratarExcecao(Exception e) {

		if (e instanceof NumberFormatException) {
			return "\nNumero/caracter inv�lido!";
		} 
		
		else if (e instanceof SQLException) {
			
			if (e.getMessage().indexOf("invalid username/password") >= 0) {
				return "\nUsu�rio e/ou senha inv�lido ou nulo!";
			} else if (e instanceof SQLSyntaxErrorException) {
				return "\nIdentificador inv�lido!";
			} else if ( e instanceof SQLIntegrityConstraintViolationException){
				return "\nRestri��o de integridade violada!";
			} else {
				return "\nErro na conexao com BD";
			}
		} 
		
		else {
			return "\nErro desconhecido!";
		}

	}

}
