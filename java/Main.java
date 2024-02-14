// Import library
import java.util.Scanner;
import java.util.ArrayList;

public class Main
{
    public static void main(String[] args)
    {
        // [Method #1] : Object instantiation using default constructor and getter-setter
        Human rain = new Human();
        rain.setName("Rain");
        rain.setGender('L');

        // [Method #2] : Object instantiation using constructor with parameter
        Human techi = new Human("Techi", 'P');

        // Let's try another method as usual
        int i, n = 0;
        String name;
        char gender;

        // Another useful data structure you can use
        ArrayList<Human> list = new ArrayList<>();

        // Even the input have to be "communicated" through an object
        Scanner sc = new Scanner(System.in);

        // This is called Exception Handling. In a nutshell, it's something like
        // "if there is an error inside the 'try" code, break and move to the
        // 'catch' code". You will learn it later in the class.
        try
        {
            n = sc.nextInt();
        }
        catch(Exception e)
        {
            System.out.println("The input is not an interger!");
        }

        // Iteratio, et cetera et cetera
        for(i = 0; i < n; i++)
        {
            // Why don't we use the same 'try-catch' code here...?
            name = sc.next();
            gender = sc.next().charAt(0);

            Human temp = new Human();
            temp.setName(name); temp.setGender(gender);
            list.add(temp);
        }


        /* OUTPUT */
        System.out.println("\n Automatic output :");
        System.out.println("The first human's name is " + rain.getName());
        System.out.println(rain.getName() + "'s gender is " + rain.getGender());
        System.out.println("The second human's name is " + techi.getName());
        System.out.println(techi.getName() + "'s gender is " + techi.getGender());

        // How to iterate through ArrayList. Seems easy right?
        // Same as a regular array, hence it's called 'ArrayList'
        System.out.println("Itearation output : ");
        for(i = 0; i < list.size(); i++)
        {
            System.out.println(Integer.toString(i + 1) + ". " + list.get(i).getName() + " | " + list.get(i).getGender());
        }

        // Close scanner/ What the heck is this? well, search it on Internet.
        sc.close();
    }
}