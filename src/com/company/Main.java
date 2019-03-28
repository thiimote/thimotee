package com.company;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        System.out.println("enter the employee name");
        String employe_name1 = in.next();
        System.out.println("choose a payment method");

        System.out.println("1.Monthly, 2.Hourly or 3.Weekly");
        int payment = in.nextInt();


        if (payment == 1 ) {

            System.out.println("enter his/her salary Amount per day");
            double salary = in.nextInt();

            double grossSalary = salary * 30;
            double deduction = (salary * 30)/100;
            double completion = (salary *5)/100;

            salary = grossSalary + completion - deduction ;
            System.out.println("hello " +employe_name1 +  " your salary per month is " +salary);
        }
        else if (payment == 2)
        {
            System.out.println("enter his/her salary Amount gained for full hours");
            double salary = in.nextInt();
            System.out.println("Please Enter number of hour ");
            int hour = in.nextInt();

            double hourRate = salary / 8 ;
            double deduction = (salary * 30) / 100;
            double RSSB = (salary * 3) / 100;

            salary = (hourRate * hour ) - deduction -  RSSB;
            System.out.println("hello " +employe_name1 +  " your available salary is " +salary);
        }
        else if (payment == 3)
        {
            System.out.println("enter his/her salary Amount per day");
            double salary = in.nextInt();

            salary = (salary * 7 );
            System.out.println("hello " +employe_name1 +  " your available salary  per week is " +salary);
        }
        else {
            System.out.println("Enter correct payment method");
        }

    }
}

