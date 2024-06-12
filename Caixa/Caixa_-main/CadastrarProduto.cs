using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CAIXA
{
    internal class CadastrarProduto
    {
        public class ProdutoManager
        {
            private List<Produto> Produtos;

            public ProdutoManager()
            {
                Produtos = new List<Produto>();
            }

            public void AddProduto(Produto Produto)
            {
                Produtos.Add(Produto);
                Console.WriteLine("Produto adicionado com sucesso!");
            }

            public void AddProdutoFromUserInput()
            {
                try
                {
                    Console.Write("Digite o ID do produto: ");
                    int ProdutoId = int.Parse(Console.ReadLine());

                    Console.Write("Digite o nome do produto: ");
                    string name = Console.ReadLine();

                    Console.Write("Digite o código de barras do produto: ");
                    string barcode = Console.ReadLine();

                    Console.Write("Digite o preço do produto: ");
                    decimal price = decimal.Parse(Console.ReadLine());

                    Console.Write("Digite a categoria do produto: ");
                    string category = Console.ReadLine();

                    Console.Write("Digite a quantidade em estoque: ");
                    int stockQuantity = int.Parse(Console.ReadLine());

                    Produto Produto = new Produto(ProdutoId, name, barcode, price, category, stockQuantity);
                    AddProduto(Produto);
                }
                catch (FormatException ex)
                {
                    Console.WriteLine("Erro de formatação: " + ex.Message);
                }
            }

            public void UpdateProduto(int ProdutoId, string name, string barcode, decimal price, string category, int stockQuantity)
            {
                var Produto = GetProdutoById(ProdutoId);
                if (Produto != null)
                {
                    Produto.Name = name;
                    Produto.Barcode = barcode;
                    Produto.Price = price;
                    Produto.Category = category;
                    Produto.StockQuantity = stockQuantity;
                    Console.WriteLine("Produto atualizado com sucesso!");
                }
                else
                {
                    Console.WriteLine("Produto não encontrado!");
                }
            }

            public void RemoveProduto(int ProdutoId)
            {
                var Produto = GetProdutoById(ProdutoId);
                if (Produto != null)
                {
                    Produtos.Remove(Produto);
                    Console.WriteLine("Produto removido com sucesso!");
                }
                else
                {
                    Console.WriteLine("Produto não encontrado!");
                }
            }

            public Produto GetProdutoById(int ProdutoId)
            {
                return Produtos.Find(p => p.ProdutoID == ProdutoId);
            }

            public void ListProdutos()
            {
                foreach (var Produto in Produtos)
                {
                    Console.WriteLine(Produto);
                }
            }
        }



    }
}
