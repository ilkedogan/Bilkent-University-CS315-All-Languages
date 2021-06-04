#include "mbed.h"
#include "TextLCD.h"
#include "Keypad.h"
#include "HCSR04.h"
#include "StepperMotorUni.h"
#include <stdio.h>

HCSR04 sensor(PTC2, PTC1);
Keypad kpad(PTC17, PTC16, PTC13, PTC12, PTC11, PTC10, PTC6, PTC4);
TextLCD lcd(PTE20, PTE21, PTE22, PTE23, PTE29, PTE30, TextLCD::LCD16x2);
StepperMotorUni motor(PTD2, PTD0, PTD5, PTA13);

int main()
{
    char inputt; //the input from the keypad
    int released = 1;
    char password[] = {'1', '2', '3', '4'};
    char inputArray[3];
    int i = 0;
    //  float measured_dist;
    long dist;
    int a = 0;

    while (1)
    {

        dist = sensor.distance(CM);
        lcd.cls();
        lcd.printf("cm: %i", dist);
        wait(0.05);

        lcd.printf("time: %i", a);
        lcd.locate(0, 1);
        wait(0.1);

        if (dist < 20)
        { // "a" counts the seconds while there is a car
            a++;
            wait(1);
        }
        else if (dist >= 20)
        {
            a = 0;
        }

        if (a > 15)
        {
            motor.set_pps(300);
            motor.move_steps();

            lcd.printf("Password:");

            while (i < 4)
            {
                inputt = kpad.ReadKey(); //read the current key pressed

                if (inputt == '\0')
                {
                    released = 1; //set the flag when all keys are released
                }
                if ((inputt != '\0') && (released == 1))
                { //if a key is pressed AND previous key was released
                    lcd.printf("%c", inputt);
                    inputArray[i] = inputt;
                    i++;
                    released = 0; //clear the flag to indicate that key is still pressed
                }
            }

        } // end while(1)
    }     // end main