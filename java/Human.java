// Class declaration for Java, the first letter MUST BE Capitalized.
public class Human
{
    // Private attributes
    private String name;
    private char gender;

    /* CONSTRUCTORS */

    // Constructor. Take note that it doesn't have any return type
    public Human()
    {
        this.name = "";
        this.gender = '-';
    }

    // Another constructor with parameter
    public Human(String name, char gender)
    {
        this.name = name;
        this.gender = gender;
    }


    /* GETTER AND SETTER */

    // Get name
    public String getName()
    {
        return this.name;
    }

    // Set name
    public void setName(String name)
    {
        this.name = name;
    }

    // Get gender
    public char getGender()
    {
        return this.gender;
    }

    // Set gender
    public void setGender(char gender)
    {
        this.gender = gender;
    }


    /* PUBLIC METHODS, OR IN THIS CASE IF YOU PREFER, "BEHAVIORS" */

    // Human eats
    public void eat()
    {
        System.out.println(this.name + " is eating!");
    }

    // Human sleeps
    public void sleep()
    {
        System.out.println(this.name + " is sleeping!");
    }

    // Nahh, Java doesn't need a destructor.
}