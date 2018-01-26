package excecao;

import java.sql.SQLException;
import java.sql.SQLIntegrityConstraintViolationException;
import java.sql.SQLSyntaxErrorException;

public class Excecao extends Exception {

	public static String tratarExcecao(Exception e) {

		if (e instanceof NumberFormatException) {
			return "\nNumero/caracter inválido!";
		} 
		
		else if (e instanceof SQLException) {
			
			if (e.getMessage().indexOf("invalid username/password") >= 0) {
				return "\nUsuário e/ou senha inválido ou nulo!";
			} else if (e instanceof SQLSyntaxErrorException) {
				return "\nIdentificador inválido!";
			} else if ( e instanceof SQLIntegrityConstraintViolationException){
				return "\nRestrição de integridade violada!";
			} else {
				return "\nErro na conexao com BD";
			}
		} 
		
		else {
			return "\nErro desconhecido!";
		}

	}

}
