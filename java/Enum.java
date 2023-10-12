class FreshJuice {

    enum freshJuiceSize{ small, medium, large };

    //code below stores the size of the freshJuice
    freshJuiceSize size;
    
}


class Enums {
    enum day{ Monday, Tuesday, Wednesday, Thursday, Friday };
    day size;
}

public class Enum {
    public static void main(String[] args) {
        FreshJuice juice = new FreshJuice();
        juice.size = FreshJuice.freshJuiceSize.large;
        System.out.println("Size: "+ juice.size);

        
        Enums today = new Enums();
        today.size = Enums.day.Monday;
        System.out.println(today.size);
    }
}
