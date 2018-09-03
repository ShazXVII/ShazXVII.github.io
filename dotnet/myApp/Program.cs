using System;

namespace myApp
{
    class Program
    {
        static void Main(string[] args)
        {
            string appName = "Test App";
            string appAuthor = "Erik Skår";
            string appVersion = "0.01";

            Console.ForegroundColor = ConsoleColor.Green;
            Console.WriteLine("{0}: Version {1} by {2}", appName, appVersion, appAuthor);
            Console.ResetColor();

            int guessCount = 0;
            string word = "ayylmao";
            string unfilled = "_______";
            void guess() {
              guessCount+=1;
              Console.WriteLine("Guess a letter");
              string guessLetter = Console.ReadLine();
              for (int i=0; i<word.Length; i++) {
                if (word.Contains(guessLetter)) {
                  int pos = word.IndexOf(guessLetter);
                  word = word.Remove(pos, 1).Insert(pos, "_");
                  unfilled = unfilled.Remove(pos,1).Insert(pos, guessLetter);
                }
              }
              Console.WriteLine(unfilled);
              if (unfilled.Contains("_")) {
                guess();
              } else {
                Console.WriteLine("You guessed all the letters in the word. You used " + guessCount + " tries");
              }

            }
            guess();

        }
    }
}
