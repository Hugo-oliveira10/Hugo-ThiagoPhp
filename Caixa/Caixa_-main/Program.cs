using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using static CAIXA.CadastrarProduto;

namespace CAIXA
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("TOME");

            ProdutoManager ProdutoManager = new ProdutoManager();

            while (true)
            {
                Console.WriteLine("Escolha uma opção:");
                Console.WriteLine("1. Cadastrar Produto");
                Console.WriteLine("2. Mostrar Produtos");
                Console.WriteLine("3. Realizar Venda");
                Console.WriteLine("4. Sair");

                string choice = Console.ReadLine();

                switch (choice)
                {
                    case "1":
                        ProdutoManager.AddProdutoFromUserInput();
                        break;
                    case "2":
                        ProdutoManager.ListProdutos();
                        break;
                    case "3":
                        RealizarVenda(ProdutoManager);
                        break;
                    case "4":
                        return;
                    default:
                        Console.WriteLine("Opção inválida. Tente novamente.");
                        break;
                }
            }
        }

        private static void RealizarVenda(ProdutoManager productManager)
        {
            Console.Write("Digite o ID da venda: ");
            int saleId = int.Parse(Console.ReadLine());
            Sale sale = new Sale(saleId);

            while (true)
            {
                Console.Write("Digite o ID do produto para adicionar à venda (ou '0' para finalizar): ");
                int produtoId = int.Parse(Console.ReadLine());

                if (produtoId == 0)
                    break;

                Produto product = productManager.GetProdutoById(produtoId);
                if (product != null)
                {
                    Console.Write($"Digite a quantidade de {product.Name} a ser adicionada à venda: ");
                    int quantity = int.Parse(Console.ReadLine());

                    sale.AddProduct(product, quantity);
                }
                else
                {
                    Console.WriteLine("Produto não encontrado.");
                }
            }

            sale.ListProdutos();
            Console.WriteLine($"Total da venda: {sale.TotalAmount:C}");
        }
    }
    }
