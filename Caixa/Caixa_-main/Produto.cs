using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CAIXA
{
    public class Produto
    {
        
    public int ProdutoID { get; set; }
        public string Name { get; set; }
        public string Barcode { get; set; }
        public decimal Price { get; set; }
        public string Category { get; set; }
        public int StockQuantity { get; set; }
        public DateTime CreatedAt { get; private set; }

        public Produto(int ProdutoId, string name, string barcode, decimal price, string category, int stockQuantity)
        {
            ProdutoID = ProdutoId;
            Name = name;
            Barcode = barcode;
            Price = price;
            Category = category;
            StockQuantity = stockQuantity;
            CreatedAt = DateTime.Now;
        }

        public void UpdateStock(int quantity)
        {
            if (StockQuantity + quantity < 0)
            {
                throw new ArgumentException("Stock quantity cannot be negative");
            }
            StockQuantity += quantity;
        }

        public override string ToString()
        {
            return $"ProdutoID: {ProdutoID}, Name: {Name}, Barcode: {Barcode}, Price: {Price}, " +
                   $"Category: {Category}, StockQuantity: {StockQuantity}, CreatedAt: {CreatedAt}";
        }
    }
}
