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
		String msg = dao.inserir(c);
		dao.fecharConexao();
		
		return msg;
	}
	
	public static String getAll() throws Exception{
		
		CustomerDAO dao = new CustomerDAO();
		String msg = dao.getAll();
		dao.fecharConexao();
		
		return msg;
	}

}