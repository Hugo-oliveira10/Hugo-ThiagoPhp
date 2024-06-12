using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CAIXA
{
    public class Sale
    {
        public int SaleID { get; set; }
        public DateTime SaleDate { get; set; }
        public decimal TotalAmount { get; private set; }
        private List<SaleItem> saleItems;

        public Sale(int saleId)
        {
            SaleID = saleId;
            SaleDate = DateTime.Now;
            saleItems = new List<SaleItem>();
            TotalAmount = 0;
        }

        public void AddProduct(Produto product, int quantity)
        {
            if (product.StockQuantity >= quantity)
            {
                product.UpdateStock(-quantity); // Reduz a quantidade em estoque
                saleItems.Add(new SaleItem(product, quantity));
                CalculateTotal();
                Console.WriteLine($"{quantity} unidade(s) de {product.Name} adicionada(s) à venda.");
            }
            else
            {
                Console.WriteLine($"Estoque insuficiente para o produto {product.Name}. Quantidade disponível: {product.StockQuantity}");
            }
        }

        private void CalculateTotal()
        {
            TotalAmount = 0;
            foreach (var saleItem in saleItems)
            {
                TotalAmount += saleItem.Product.Price * saleItem.Quantity;
            }
        }

        public void ListProdutos()
        {
            foreach (var saleItem in saleItems)
            {
                Console.WriteLine($"{saleItem.Product.Name} - {saleItem.Quantity} unidade(s) - Total: {saleItem.Product.Price * saleItem.Quantity:C}");
            }
        }

        public override string ToString()
        {
            return $"SaleID: {SaleID}, SaleDate: {SaleDate}, TotalAmount: {TotalAmount}";
        }
    }

    public class SaleItem
    {
        public Produto Product { get; private set; }
        public int Quantity { get; private set; }

        public SaleItem(Produto product, int quantity)
        {
            Product = product;
            Quantity = quantity;
        }
    }
}
