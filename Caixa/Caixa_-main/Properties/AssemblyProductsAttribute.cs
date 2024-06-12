using System;

internal class AssemblyProductsAttribute : Attribute
{
    public AssemblyProductsAttribute(string v)
    {
        V = v;
    }

    public string V { get; }
}