<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    //
    public function getChartData(Request $request)
{
    if($request->ajax())
    {
        print_r("hello");die;       
    }
    return response()->json([
        ['label' => 'January', 'value' => 10],
        ['label' => 'February', 'value' => 20],
        ['label' => 'March', 'value' => 5],
        ['label' => 'April', 'value' => 40],
        ['label' => 'May', 'value' => 30],
        ['label' => 'June', 'value' => 50],
        
    ]);
}
public function index(Request $request)
    {
        // Hardcoded data for testing
        $totaloprators = 5; // Example total operators
        $totalActiveMachine = 10; // Example total active machines

        $operators=[
            ['id' => 1, 'name' => 'Operator 1'],
            ['id' => 2, 'name' => 'Operator 2'],
            ['id' => 3, 'name' => 'Operator 3'],
        ];
        $locations=[
            ['id' => 1, 'name' => 'Location 1'],
            ['id' => 2, 'name' => 'Location 2'],
            ['id' => 3, 'name' => 'Location 3'],
        ];
        // Example machines data
        $machines = [
            ['id' => 1, 'machine_code' => 'M001', 'name' => 'Excavator'],
            ['id' => 2, 'machine_code' => 'M002', 'name' => 'Bulldozer'],
            ['id' => 3, 'machine_code' => 'M003', 'name' => 'Crane'],
        ];

        // Example total locations
        $totalloctions = 3;

        // Example total earned data
        $totalEarned = [
            ['month' => 'January', 'earned_count' => 1000],
            ['month' => 'February', 'earned_count' => 1500],
            ['month' => 'March', 'earned_count' => 2000],
        ];

        // Example total games played
        $totalGamesPlayed = [
            ['month' => 'January', 'games_count' => 50],
            ['month' => 'February', 'games_count' => 75],
            ['month' => 'March', 'games_count' => 100],
        ];

        // Example total points played
        $totalPointsPlayed = [
            ['month' => 'January', 'points_count' => 500],
            ['month' => 'February', 'points_count' => 750],
            ['month' => 'March', 'points_count' => 1000],
        ];

        // Example earned data
        $earnedData = [
            ['locationname' => 'Location A', 'earned' => 2000],
            ['locationname' => 'Location B', 'earned' => 3000],
        ];

        // Example games played data
        $gamesPlayed = 150; // Example total games played

        // Example points played data
        $pointsPlayed = 1200; // Example total points played

        // Example earned value
        $Earned = 5000; // Example total earned

        // Example lifetime earned
        $lfTmEarned = 10000; // Example lifetime earned

        // Example credit in data
        $finalPaidIn = [
            ['locationname' => 'Location A', 'creditIn' => 500],
            ['locationname' => 'Location B', 'creditIn' => 700],
        ];

        // Example earned data for pie chart
        $earnedIndata = [
            ['Location A', 2000],
            ['Location B', 3000],
        ];

        // Example points earned data
        $totalPointsEarneds = [
            ['netEarned_count' => 4000],
            ['netEarned_count' => 5000],
        ];
        if($request->ajax())
        {
            $data=[
                'earnedData'=>$earnedData,
                'locations'=>$locations,
                'operators'=>$operators,
                'totaloprators' => $totaloprators,
                'totalloctions' => $totalloctions,
                'machines' => $machines,
                'totalActiveMachine' => $totalActiveMachine,
                'totalEarned' => $totalEarned,
                'totalGamesPlayed' => $totalGamesPlayed,
                'totalPointsPlayed' => $totalPointsPlayed,
                'earnedIndata' => $earnedIndata,
                'gamesPlayed' => $gamesPlayed,
                'pointsPlayed' => $pointsPlayed,
                'Earned' => $Earned,
                'lfTmEarned' => $lfTmEarned,
                'finalPaidIn' => $finalPaidIn,
                'totalPointsEarneds' => $totalPointsEarneds,
            ];
            return response()->json($data);
        }

        return view('test');
    }
}
