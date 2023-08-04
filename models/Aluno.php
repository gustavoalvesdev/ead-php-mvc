<?php 

namespace Models;

use Core\Model;

class Aluno extends Model
{
 
    public function isLogged()
    {
        //  Sessão do aluno logado
        return isset($_SESSION['lgaluno']) && !empty($_SESSION['lgaluno']);
    }

    public function fazerLogin($email, $senha)
    {
        $sql = "SELECT * FROM alunos WHERE email = :email AND senha = :senha LIMIT 1";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $row = $sql->fetch();

            $_SESSION['lgaluno'] = $row['id'];

            return true;
        }

        return false;
        
    }

}
