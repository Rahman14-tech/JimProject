<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class exerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exerciseArray = array(array("Name" => "Concentration curl", "Type" => 1, "Part" => 1, "Tool" => 1, "Difficulty" => 2, "Instruction" => "Sit down on a flat bench with one dumbbell in front of you between your legs. Your legs should be spread with your knees bent and feet on the floor. Use your right arm to pick the dumbbell up. Place the back of your right upper arm on the top of your inner right thigh. Rotate the palm of your hand until it is facing forward away from your thigh. Tip: Your arm should be extended and the dumbbell should be above the floor. This will be your starting position. While holding the upper arm stationary, curl the weights forward while contracting the biceps as you breathe out. Only the forearms should move. Continue the movement until your biceps are fully contracted and the dumbbells are at shoulder level. Tip: At the top of the movement make sure that the little finger of your arm is higher than your thumb. This guarantees a good contraction. Hold the contracted position for a second as you squeeze the biceps. Slowly begin to bring the dumbbells back to starting position as your breathe in. Caution: Avoid swinging motions at any time. Repeat for the recommended amount of repetitions. Then repeat the movement with the left arm.  Variations: This exercise can be performed standing with the torso bent forward and the arm in front of you. In this case, no leg support is used for the back of your arm so you will need to make extra effort to ensure no movement of the upper arm. This is a more challenging version of the exercise and is not recommended for people with lower back issues.", "VideoUrl" => "0AUGkch3tzc", "ThumbnailImage" => "ConcentrationCurl.jpg"), array("Name" => "Dumbbell floor press", "Type" => 2, "Part" => 3, "Tool" => 1, "Difficulty" => 2, "Instruction" => "Lay on the floor holding dumbbells in your hands. Your knees can be bent. Begin with the weights fully extended above you. Lower the weights until your upper arm comes in contact with the floor. You can tuck your elbows to emphasize triceps size and strength, or to focus on your chest angle your arms to the side. Pause at the bottom, and then bring the weight together at the top by extending through the elbows.", "VideoUrl" => "uUGDRwge4F8", "ThumbnailImage" => "DumbbellFloorPress.jpg"));
        foreach ($exerciseArray as $ex) {
            DB::table('exercises')->insert([
                'Name' => $ex["Name"],
                'Type' => $ex["Type"],
                'Part' => $ex["Part"],
                'Tool' => $ex["Tool"],
                'Difficulty' => $ex["Difficulty"],
                'Instruction' => $ex["Instruction"],
                'VideoUrl' => $ex["VideoUrl"],
                'ThumbnailImage' => $ex["ThumbnailImage"],
            ]);
        }
    }
}