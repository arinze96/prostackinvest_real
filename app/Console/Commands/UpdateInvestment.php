<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Transaction;
use App\Models\Account;
use Carbon\Carbon;
class UpdateInvestment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:accurral';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command updates the accurral of users investment';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $activeInvestments  = Transaction::where("status", "=", "1")->where("type", "=", "investment")->orderBy("created_at", "desc")->get();
        echo "<pre>";
        // print_r($activeInvestments);

        // die();
        foreach ($activeInvestments as $key => $investment) {

                
                // dates in days
                $startDate = Carbon::parse($investment->created_at);
                // // $todayDate = date_create(date("Y-m-d h:i:s", strtotime(date("Y-m-d",time())."+2 day")));
                $todayDate = Carbon::now();
                $lastRenewDate = Carbon::parse($investment->last_renewal);
                $closeDate = Carbon::parse($investment->close_date);
                $totalDaysForInvestment  = Carbon::parse($startDate)->diffInDays($closeDate,false);
                $daysRemining  = Carbon::parse($todayDate)->diffInDays($closeDate,false);
                $totalOutcome = ($investment->amount * $investment->percent_commission)/100;
                $dailyAmount =  empty($totalDaysForInvestment) ? 0 : $totalOutcome/($totalDaysForInvestment);
                $increamentTime = explode(" ",$investment->renewal)[0];

                if(preg_match("/hour/i", strtolower($investment->renewal)))
                {

                    if(Carbon::parse($lastRenewDate)->diffInHours($todayDate,false) >= $increamentTime){
                        $totalHoursForInvestment  = Carbon::parse($startDate)->diffInHours($closeDate,false);
                        $hourlyAmount = empty($totalHoursForInvestment) ? 0 : $totalOutcome/($totalHoursForInvestment);
                        $hoursRemaining  = Carbon::parse($todayDate)->diffInHours($closeDate,false);
                        $newAmount = ($investment->growth_amount + $hourlyAmount )* $increamentTime;

                        // echo "\n entered newAmount : $newAmount , accural-amount($increamentTime per hour ) : $hourlyAmount , initial-amount: $investment->amount , roi : $investment->percent_commission , duration : $totalHoursForInvestment";

                        $result = Transaction::where("id", "=", $investment->id)->update([
                            'growth_amount'=>$newAmount,
                            "status" => ($hoursRemaining == 0) ? 2 : 1,
                            "last_renewal"=>date("Y-m-d h:i:s")
                        ]);

                        //update account
                        if (($hoursRemaining == 0)) {
                            $userAccount = Account::where("user_id", "=", "$investment->user_id")->get()->first();
                            $balance = $userAccount->{config('app.iso_account')[$investment->currency]."_balance"} + $newAmount;
                            Account::where("user_id", "=", "$investment->user_id")->update([
                                config('app.iso_account')[$investment->currency]."_balance"=> $balance,
                            ]);
                        }


                    }
                  
                }
                elseif(preg_match("/day/i", strtolower($investment->renewal)))
                {
                    echo "\n Investment $investment->id : Last Renew Date : $lastRenewDate  -  Today Date : $todayDate = ".Carbon::parse($lastRenewDate)->diffInDays($todayDate,false);
                    if((Carbon::parse($lastRenewDate)->diffInDays($todayDate,false)) >= $increamentTime){
                    
               
                        $newAmount = ($investment->growth_amount + $dailyAmount) * $increamentTime;
                         echo "\n <b> Investment $investment->id Entered newAmount: </b> $newAmount";
                         echo "\n <b> Investment $investment->id Accural-amount($increamentTime per day ) : </b> $dailyAmount ";
                         echo "\n <b> Investment $investment->id Initial-amount: : </b> $investment->amount";
                         echo "\n <b> Investment $investment->id Roi : </b> $investment->percent_commission";
                         echo "\n <b> Investment $investment->id Duration : </b> $totalDaysForInvestment";
                         echo "\n <b> Investment $investment->id Days remaining : </b> $daysRemining";
                        
                        $result = Transaction::where("id", "=", $investment->id)->update([
                            'growth_amount'=>$newAmount,
                            "status" => ($daysRemining == 0) ? 2 : 1,
                            "last_renewal"=>date("Y-m-d h:i:s")
                        ]);

                        // // //update account
                        if (($daysRemining <= 0)) {
                            $userAccount = Account::where("user_id", "=", "$investment->user_id")->get()->first();
                            $balance = $userAccount->{config('app.iso_account')[$investment->currency]."_balance"} + $newAmount;
                            Account::where("user_id", "=", "$investment->user_id")->update([
                                config('app.iso_account')[$investment->currency]."_balance"=> $balance,
                            ]);
                        }
                    }

                }
                elseif(preg_match("/week/i", strtolower($investment->renewal)))
                {

                    if(Carbon::parse($lastRenewDate)->diffInWeeks($todayDate,false) >= $increamentTime){
                        $totalWeeksForInvestment  = Carbon::parse($startDate)->diffInWeeks($closeDate,false);
                        $weeklyAmount = empty($totalWeeksForInvestment) ? 0 : $totalOutcome/($totalWeeksForInvestment);
                        $weeksRemaining  = Carbon::parse($todayDate)->diffInWeeks($closeDate,false);
                        $newAmount = ($investment->growth_amount + $weeklyAmount )* $increamentTime;

                        // echo "\n entered newAmount : $newAmount , accural-amount($increamentTime per week ) : $weeklyAmount , initial-amount: $investment->amount , roi : $investment->percent_commission , duration : $totalWeeksForInvestment";

                        $result = Transaction::where("id", "=", $investment->id)->update([
                            'growth_amount'=>$newAmount,
                            "status" => ($weeksRemaining == 0) ? 2 : 1,
                            "last_renewal"=>date("Y-m-d h:i:s")
                        ]);

                        //update account
                        if (($weeksRemaining == 0)) {
                            $userAccount = Account::where("user_id", "=", "$investment->user_id")->get()->first();
                            $balance = $userAccount->{config('app.iso_account')[$investment->currency]."_balance"} + $newAmount;
                            Account::where("user_id", "=", "$investment->user_id")->update([
                                config('app.iso_account')[$investment->currency]."_balance"=> $balance,
                            ]);
                        }
                    }
                }elseif(preg_match("/month/i", strtolower($investment->renewal)))
                {
                    if(Carbon::parse($lastRenewDate)->diffInMonths($todayDate,false) >= $increamentTime){
                        $totalMonthsForInvestment  = Carbon::parse($startDate)->diffInMonths($closeDate,false);
                        $monthlyAmount = empty($totalMonthsForInvestment) ? 0 :  $totalOutcome/($totalMonthsForInvestment);
                        $monthsRemaining  = Carbon::parse($todayDate)->diffInMonths($closeDate,false);
                        $newAmount = ($investment->growth_amount + $monthlyAmount )* $increamentTime;

                        // echo "\n entered newAmount : $newAmount , accural-amount($increamentTime per month ) : $monthlyAmount , initial-amount: $investment->amount , roi : $investment->percent_commission , duration : $totalMonthsForInvestment";

                        $result = Transaction::where("id", "=", $investment->id)->update([
                            'growth_amount'=>$newAmount,
                            "status" => ($monthsRemaining == 0) ? 2 : 1,
                            "last_renewal"=>date("Y-m-d h:i:s")
                        ]);

                        //update account
                        if (($monthsRemaining == 0)) {
                            $userAccount = Account::where("user_id", "=", "$investment->user_id")->get()->first();
                            $balance = $userAccount->{config('app.iso_account')[$investment->currency]."_balance"} + $newAmount;
                            Account::where("user_id", "=", "$investment->user_id")->update([
                                config('app.iso_account')[$investment->currency]."_balance"=> $balance,
                            ]);
                        }
                    }
                }
                elseif(preg_match("/year/i", strtolower($investment->renewal)))
                {
                    if(Carbon::parse($lastRenewDate)->diffInYears($todayDate,false) >= $increamentTime){
                        $totalYearsForInvestment  = Carbon::parse($startDate)->diffInYears($closeDate,false);
                        $yearlyAmount = empty($totalYearsForInvestment) ? 0 : $totalOutcome/($totalYearsForInvestment);
                        $yearsRemaining  = Carbon::parse($todayDate)->diffInYears($closeDate,false);
                        $newAmount = ($investment->growth_amount + $yearlyAmount )* $increamentTime;

                        // echo "\n entered newAmount : $newAmount , accural-amount($increamentTime per week ) : $yearlyAmount , initial-amount: $investment->amount , roi : $investment->percent_commission , duration : $totalYearsForInvestment";

                        $result = Transaction::where("id", "=", $investment->id)->update([
                            'growth_amount'=>$newAmount,
                            "status" => ($yearsRemaining == 0) ? 2 : 1,
                            "last_renewal"=>date("Y-m-d h:i:s")
                        ]);

                        //update account
                        if (($yearsRemaining == 0)) {
                            $userAccount = Account::where("user_id", "=", "$investment->user_id")->get()->first();
                            $balance = $userAccount->{config('app.iso_account')[$investment->currency]."_balance"} + $newAmount;
                            Account::where("user_id", "=", "$investment->user_id")->update([
                                config('app.iso_account')[$investment->currency]."_balance"=> $balance,
                            ]);
                        }
                    }
                }
                
               
        
        }

        return 0;
    }
}