package com.company;

import java.util.ArrayList;
import java.util.Collections;

public class Main {

    public static void main(String[] args) {
	// write your code here
        int board[][] = generate_random_board();
        int g_board[][] = new int[3][3];

        int l = 0;
        for (int i = 0; i < 3; ++i) {
            for (int j = 0; j < 3; ++j) {
                if (i == 2 && j == 2)
                    break;
                g_board[i][j] = l;
                l++;
            }
        }
        State initial = new State(board);
        State.gl_Board(g_board);
        System.out.println("Random board: ");
        System.out.println(initial);

        Node goal = Node.A_star(initial);

        if (goal != null) {
            System.out.println("\nSolution sequence:\n");
            Node.print_soln(goal);
        } else
            System.out.println("No solution found.");
    }

    static int[][] generate_random_board() {

        int[][] board = new int[3][3];
        ArrayList<Integer> permutation = new ArrayList<Integer>();

        for (int i = 0; i < 9; ++i)
            permutation.add(i);

        Collections.shuffle(permutation);

        int k = 0;
        for (int i = 0; i < 3; ++i)
            for (int j = 0; j < 3; ++j) {
                board[i][j] = permutation.get(k);
                k++;
            }

        return board;
    }
}
