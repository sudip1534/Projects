package com.company;

import java.util.Objects;

/**
 * Created by Sudip on 3/19/2018.
 */
public class State {
    int board[][], bR, bC;
    static int g_board[][] = new int[3][3];

    public State(int[][] board) {
        super();
        this.board = board;
        search_blank();

    }

    public void search_blank() {
        for (int i = 0; i < 3; ++i) {
            for (int j = 0; j < 3; ++j)
                if (board[i][j] == 0) {
                    bR = i;
                    bC = j;

                    return;
                }
        }
    }

    public State move_up() {

        if (bR == 0)
            return null;

        int newBoard[][] = new int[3][3];

        for (int i = 0; i < 3; ++i)
            for (int j = 0; j < 3; ++j)
                newBoard[i][j] = board[i][j];

        int temp = newBoard[bR][bC];
        newBoard[bR][bC] = newBoard[bR - 1][bC];
        newBoard[bR - 1][bC] = temp;

        return new State(newBoard);
    }

    public State move_down() {

        if (bR == 2)
            return null;

        int newBoard[][] = new int[3][3];

        for (int i = 0; i < 3; ++i)
            for (int j = 0; j < 3; ++j)
                newBoard[i][j] = board[i][j];

        int temp = newBoard[bR][bC];
        newBoard[bR][bC] = newBoard[bR + 1][bC];
        newBoard[bR + 1][bC] = temp;

        return new State(newBoard);
    }

    public State move_left() {

        if (bC == 0)
            return null;

        int newBoard[][] = new int[3][3];

        for (int i = 0; i < 3; ++i)
            for (int j = 0; j < 3; ++j)
                newBoard[i][j] = board[i][j];

        int temp = newBoard[bR][bC];
        newBoard[bR][bC] = newBoard[bR][bC-1];
        newBoard[bR][bC-1] = temp;

        return new State(newBoard);
    }
    public State move_right() {
        if (bC == 2)
            return null;

        int newBoard[][] = new int[3][3];

        for (int i = 0; i < 3; ++i)
            for (int j = 0; j < 3; ++j)
                newBoard[i][j] = board[i][j];

        int temp = newBoard[bR][bC];
        newBoard[bR][bC] = newBoard[bR][bC+1];
        newBoard[bR][bC+1] = temp;

        return new State(newBoard);
    }

    public boolean goal_test() {

        return board[0][0]==1 && board[0][1]==2 && board[0][2]==3
                && board[1][0]==4 && board[1][1]==5 && board[1][2]==6
                && board[2][0]==7 && board[2][1]==8;
    }

    public String toString() {

        String s = "";

        for (int i = 0; i < 3; ++i) {
            for (int j = 0; j < 3; ++j)
                s += board[i][j] + " ";

            s += "\n";
        }

        return s;
    }


    public static void gl_Board(int goal_board[][]){

        for(int i=0;i<3;i++){
            for(int j=0;j<3;j++){
                g_board[i][j] = goal_board[i][j];
            }

        }
    }



    public int manhattan_distance() {

        int h = 0;
        for(int i=0;i<3;i++){
            for(int j=0;j<3;j++){
                if(board[i][j] == 1)
                    h+= (Math.abs(i-0)+Math.abs(j-0));
                if(board[i][j] == 2)
                    h+= (Math.abs(i-0)+Math.abs(j-1));
                if(board[i][j] == 3)
                    h+= (Math.abs(i-0)+Math.abs(j-2));
                if(board[i][j] == 4)
                    h+= (Math.abs(i-1)+Math.abs(j-0));
                if(board[i][j] == 5)
                    h+= (Math.abs(i-1)+Math.abs(j-1));
                if(board[i][j] == 6)
                    h+= (Math.abs(i-1)+Math.abs(j-2));
                if(board[i][j] == 7)
                    h+= (Math.abs(i-2)+Math.abs(j-0));
                if(board[i][j] == 8)
                    h+= (Math.abs(i-2)+Math.abs(j-1));
            }
        }

        return h;
    }

    public int misplaced_tiles() {

        int h = 0;
        for(int i=0;i<3;i++) {
            for (int j = 0; j < 3; j++) {

                if ( board[i][j]!=0 &&  board[i][j] != g_board[i][j])
                    h += 1;

            }
        }
        // Complete here

        return h;
    }

    public int tiles_out_of_row_or_column() {

        int h = 0;
        for(int i=0;i<3;i++){
            for(int j=0;j<3;j++){
                if(i==0){
                    if(board[i][j]!=0 && (board[i][j]!=1 || board[i][j]!=2 || board[i][j]!=3 ))
                        h++;
                }
                if(i==1){
                    if(board[i][j]!=0 && (board[i][j]!=4 || board[i][j]!=5 || board[i][j]!=6 ))
                        h++;
                }
                if(i==2){
                    if(board[i][j]!=0 && (board[i][j]!=7 || board[i][j]!=8))
                        h++;
                }

            }
        }

        for(int i=0;i<3;i++){
            for(int j=0;j<3;j++){
                if(i==0){
                    if(board[j][i]!=0 && (board[j][i]!=1 || board[j][i]!=4 || board[j][i]!=7 ))
                        h++;
                }
                if(i==1){
                    if(board[j][i]!=0 && (board[j][i]!=2 || board[j][i]!=5 || board[j][i]!=8 ))
                        h++;
                }
                if(i==2){
                    if(board[j][i]!=0 && (board[j][i]!=3 || board[j][i]!=6))
                        h++;
                }

            }
        }
        // Complete here

        return h;
    }

    @Override
    public boolean equals(Object obj) {

        State rhs = (State) obj;

        for (int i = 0; i < 3; ++i)
            for (int j = 0; j < 3; ++j)
                if (board[i][j] != rhs.board[i][j])
                    return false;

        return true;
    }

    @Override
    public int hashCode() {

        // return Arrays.deepHashCode(board);

        return Objects
                .hash(board[0][0], board[0][1], board[0][2], board[1][0],
                        board[1][1], board[1][2], board[2][0], board[2][1],
                        board[2][2]);
    }


}
