using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace PointExercice
{
    public class Point
    {
        // Attr
        private int abscisse;
        private int ordonne;

        // Constructor
        public Point(int abscisse, int ordonne)
        {
            this.abscisse = abscisse;
            this.ordonne = ordonne;
        }

        // Propriété
        public int Abscisse
        {
            get => abscisse;
            set => abscisse = value;
        }
        public int Ordonne
        {
            get => ordonne;
            set => ordonne = value;
        }

        // Méthode
        public string affiche()
        {
            return "L'abscisse est " + this.abscisse + " et l'ordonné est " + this.ordonne;
        }

        public void deplace(int abscisse, int ordonne)
        {
            this.abscisse += abscisse;
            this.ordonne += ordonne;
        }
    }
}
