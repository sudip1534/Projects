package com.company;

public class DigitImage {
    int[] pixels;
    int digit;

    public DigitImage() {
        System.out.println("Digit");
    }

    public DigitImage(int[] pixels, int digit) {
        super();

        this.pixels = pixels.clone();
        this.digit = digit;
    }

    public int getDigit() {
        return digit;
    }
}
