using MySql.Data.MySqlClient;
using MySql.Data;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Security.Cryptography;

namespace ProjetoDS
{
    public static class DAO
    {
        public static MySqlConnection conexaoSQL;
        public static MySqlCommand cmd;
        public static string conexaoString = "server=localhost;port=3306;Database=DadosCaixa;uid=root";

        public static void Conexao()
        {
            try
            {
                conexaoSQL = new MySqlConnection(conexaoString);
                conexaoSQL.Open();
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.Message);
            }
        }

        public static void Comando(string comando)
        {
            cmd = new MySqlCommand(comando, conexaoSQL);
        }

        public static void Linha()
        {
            int linhasafetadas = cmd.ExecuteNonQuery();
            if (linhasafetadas == 0)
            {
                throw new Exception("Nenhuma linha foi afetada pela consulta.");
            }
            else
            {
                Console.WriteLine("Linhas afetadas:{0}", linhasafetadas);
            }
        }
        public static void adicionar(string parametro, string valor)
        {
            cmd.Parameters.AddWithValue(parametro, valor);
        }

        public static void FechandoMySQL()
        {
            conexaoSQL.Close();
        }
    }
}