package bo;

import beans.Customer;
import dao.CustomerDAO;

public class CustomerBO {
	
	public static String novoCustomer(Customer c) throws Exception{
		if (c.getId() < 1){
			return "ID inválido!";
		}
		
		if (c.getActive().toUpperCase() != "TRUE" ){
			return "Não ativo!";
		}
		
		c.setNome(c.getNome().toUpperCase());
		
		CustomerDAO dao = new CustomerDAO();
		return dao.inserir(c);
	}
	
	public static String getAll() throws Exception{
		
		CustomerDAO dao = new CustomerDAO();
		return dao.getAll();
	}

}
