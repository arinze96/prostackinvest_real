<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config('app.nam') }}</title>
    @include('includes.c_css')
    <!-- Smartsupp Live Chat script -->
    {{-- <script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '3797d56aa119729d0fea6d377b7b04545f138874';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script> --}}
</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('includes.c_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('includes.c_header')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-sub"><span>Welcome!</span>
                                </div>
                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title fw-normal">{{ auth()->user()->username }}
                                        </h2>
                                        <div class="nk-block-des">
                                            <p>At a glance summary of your account. Have fun!</p>
                                            <p class="w-75 alert alert-info">REFERAL LINK:
                                                <input type="text" class=" form-control"
                                                    value="{{ route('user.register', [auth()->user()->username]) }}">
                                            </p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">
                                            <li class="btn-wrap"><a
                                                    href="{{ route('user.deposit.view', ['usd']) }}"
                                                    class="btn btn-icon btn-xl btn-success"><em
                                                        class="icon ni ni-wallet-in"></em></a><span
                                                    class="btn-extext">Deposit</span></li>
                                            <li class="btn-wrap"><a
                                                    href="{{ route('user.plan.view', ['all']) }}"
                                                    class="btn btn-icon btn-xl btn-dim btn-outline-light"><em
                                                        class="icon ni ni-arrow-from-right"></em></a><span
                                                    class="btn-extext">Reinvest</span></li>
                                            <li class="btn-wrap"><a href="{{ route('user.withdraw.view') }}"
                                                    class="btn btn-icon btn-xl btn-warning"><em
                                                        class="icon ni ni-wallet-out"></em></a><span
                                                    class="btn-extext">Withdraw</span></li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="row gy-gs">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="nk-block">
                                            <div class="nk-block-head-xs">
                                                <div class="nk-block-between-md g-2">
                                                    <div class="nk-block-head-content mt-4">
                                                        <h5 class="nk-block-title title">Overview</h5>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-block-head -->
                                            <div class="row g-2">
                                                <div class="col-sm-4">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Available USD balance
                                                                    </div>
                                                                    <div class="number-lg amount">
                                                                        <?php
                                                                        //   if($investments){
                                                                        //     $lastInvestment = count($investments);
                                                                        //   $amount = $investments[$lastInvestment]->amount;
                                                                        //     $commission = ($amount * $investments[$lastInvestment]->percent_commission) / 100;
                                                                        //     $total = $amount + $commission;
                                                                        //     $daily = $commission / preg_replace('~\D~', '', $investments[$lastInvestment]->duration);

                                                                        // $start = strtotime($investments[$lastInvestment]->created_at);
                                                                        // $stop = strtotime($investments[$lastInvestment]->close_date);
                                                                        // $today = time();
                                                                        // $days_diff = $stop - $start;
                                                                        // $remaining_days = ($today - $start) / 86400;
                                                                        // $no_of_days = $investments[$lastInvestment]->duration;
                                                                        // $exploded = explode(' ', $no_of_days);
                                                                        // $numeric = (int) $exploded[0];
                                                                        // $all = ($numeric * $daily) + $amount;
                                                                        //   }
                                                                        // echo $all;
                                                                        // echo $today;
                                                                        // echo '<br>'; 
                                                                        // echo $stop;
                                                                        // 2022-03-05 09:03:14
                                                                         
                                                                          ?>
                                                                          {{-- {{ ($investments) }} --}}
                                                                          {{-- {{ dd($investments) }} --}}
                                                                          ${{ 
                                                                            // $today >= $stop
                                                                            // ?
                                                                            // number_format($account->dolla_balance + $account->referral_balance + $all, 0, '.', ',')
                                                                            // :
                                                                            number_format($account->dolla_balance, 0, '.', ',')
                                                                          }}
                                                                         {{-- ${{ number_format($account->dolla_balance + $account->referral_balance, 0, '.', ',') }} --}}
                                                                    </div>
                                                                </div>
                                                                <div class="nk-wg7-foot">
                                                                    <span class="nk-wg7-note">Dollar Balance
                                                                        <span></span></span>
                                                                </div>
                                                            </div><!-- .nk-wg7 -->
                                                        </div><!-- .card-inner -->
                                                    </div><!-- .card -->
                                                </div>



                                                <div class="col-sm-4">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Available BTC balance
                                                                    </div>
                                                                    <div class="number-lg amount">
                                                                        {{ number_format($account->bitcoin_balance, 0, '.', ',') }}
                                                                    </div>
                                                                </div>
                                                                <div class="nk-wg7-foot">
                                                                    <span class="nk-wg7-note">Bitcoin Balance
                                                                        <span></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @if (!$loans == null)
                                                    <div class="col-sm-4">
                                                        <div class="card card-bordered text-light is-dark h-100">
                                                            <div class="card-inner">
                                                                <div class="nk-wg7">
                                                                    <div class="nk-wg7-stats">
                                                                        <div class="nk-wg7-title">Personal Loan
                                                                        </div>
                                                                        <div class="number-lg amount">
                                                                            {{-- {{ $loans->amount }} --}}
                                                                            ${{ number_format($loans->amount, 0, '.', ',') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-wg7-foot">
                                                                        <span class="nk-wg7-note">Loan Status &nbsp;
                                                                            &nbsp; :
                                                                            {{ $loans->status == 0 ? 'unapproved' : 'Aprroved' }}
                                                                            <span></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif

                                                <div class="col-sm-4">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Available ETH balance
                                                                    </div>
                                                                    <div class="number-lg amount">ETH
                                                                        {{ number_format($account->ethereum_balance, 0, '.', ',') }}
                                                                    </div>
                                                                </div>
                                                                <div class="nk-wg7-foot">
                                                                    <span class="nk-wg7-note">Ethereum Balance
                                                                        <span></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Referral USD balance
                                                                    </div>
                                                                    <div class="number-lg amount">
                                                                        ${{ number_format($account->referral_balance, 0, '.', ',') }}
                                                                    </div>
                                                                </div>
                                                                <div class="nk-wg7-foot">
                                                                    <span class="nk-wg7-note">
                                                                        No of Referral: <span
                                                                            style="color: white; font-size:30px">{{ $user->referral_count }}</span></span>
                                                                </div>
                                                            </div><!-- .nk-wg7 -->
                                                        </div><!-- .card-inner -->
                                                    </div><!-- .card -->
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Deposits USD </div>
                                                                    <div class="number-lg amount">
                                                                        ${{ number_format($account->deposits, 0, '.', ',') }}
                                                                    </div>
                                                                </div>
                                                                <div class="nk-wg7-foot">
                                                                    <span class="nk-wg7-note">Total Deposits of users
                                                                        <span></span></span>
                                                                </div>
                                                            </div><!-- .nk-wg7 -->
                                                        </div><!-- .card-inner -->
                                                    </div><!-- .card -->
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Withdrawals USD </div>
                                                                    <div class="number-lg amount">
                                                                        ${{ number_format($account->dolla_withdrawals, 0, '.', ',') }}
                                                                    </div>
                                                                </div>
                                                                <div class="nk-wg7-foot">
                                                                    <span class="nk-wg7-note">Total USD withidrawn
                                                                        by you
                                                                        <span></span></span>
                                                                </div>
                                                            </div><!-- .nk-wg7 -->
                                                        </div><!-- .card-inner -->
                                                    </div><!-- .card -->
                                                </div>


                                                <div class="col-sm-4">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Active Investment
                                                                    </div>
                                                                    <div class="number-lg amount">
                                                                        {{ $investments->count() }}
                                                                    </div>
                                                                </div>
                                                                <div class="nk-wg7-foot">
                                                                    <span class="nk-wg7-note">Number of active
                                                                        investment
                                                                    </span>
                                                                </div>
                                                            </div><!-- .nk-wg7 -->
                                                        </div><!-- .card-inner -->
                                                    </div><!-- .card -->
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Active deposits
                                                                    </div>
                                                                    <div class="number-lg amount">
                                                                        {{ $deposits->count() }}
                                                                    </div>
                                                                </div>
                                                                <div class="nk-wg7-foot">
                                                                    <span class="nk-wg7-note">Number of active
                                                                        deposits
                                                                    </span>
                                                                </div>
                                                            </div><!-- .nk-wg7 -->
                                                        </div><!-- .card-inner -->
                                                    </div><!-- .card -->
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Active withdrawal
                                                                    </div>
                                                                    <div class="number-lg amount">
                                                                        {{ $withdrawals->count() }}
                                                                    </div>
                                                                </div>
                                                                <div class="nk-wg7-foot">
                                                                    <span class="nk-wg7-note">Number of active
                                                                        withdrawal
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- recent deposits -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                    <div class="col-md-12">
                                        {{-- table start --}}
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="table-responsive">
                                                    @if (!$deposits->isEmpty())
                                                        <h5> Your Recent Deposit </h5>
                                                        <hr>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Message</th>
                                                                    <th scope="col">Currency</th>
                                                                    <th scope="col">Amount</th>
                                                                    <th scope="col">Type</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Date</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($deposits as $key => $deposit)
                                                                    <tr>
                                                                        <th scope="row">{{ $key + 1 }}</th>
                                                                        <td>{{ ucwords($deposit->message) }}</td>
                                                                        <td>{{ ucwords($deposit->currency) }}</td>
                                                                        <td>{{ number_format($deposit->amount, 0, '.', ',') }}
                                                                        </td>
                                                                        <td>{{ ucwords($deposit->type) }}</td>
                                                                        <td
                                                                            class="{{ strtolower(config('app.tx_status')[$deposit->status]) }}">
                                                                            {{ ucwords(config('app.tx_status')[$deposit->status]) }}
                                                                        </td>
                                                                        <td>{{ date('d M,Y', strtotime($deposit->created_at)) }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    @endif
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        {{-- table ends --}}
                                    </div>
                                </div><!-- .row -->
                            </div><!-- .nk-block -->
                            <!-- recent investment -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                    <div class="col-md-12">
                                        {{-- table start --}}
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="table-responsive">
                                                    @if (!$investments->isEmpty())
                                                        <h5> Your Active Investment </h5>
                                                        <hr>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>

                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Amount Invested</th>
                                                                    <th scope="col">Current Amount</th>
                                                                    <th scope="col">Days of investment</th>
                                                                    <th scope="col">Daily </th>
                                                                    <th scope="col">Start Date</th>
                                                                    <th scope="col">End Date</th>
                                                                    <th scope="col">Duration</th>
                                                                    <th scope="col">Commission</th>
                                                                    <th scope="col">Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($investments as $key => $investment)
                                                                    <tr>
                                                                        <th scope="row">{{ $key + 1 }} </th>
                                                                        <td>{{ number_format($investment->amount, 0, '.', ',') }}</td>
                                                                        <?php
                                                                        $amount = $investment->amount;
                                                                        $commission = ($amount * $investment->percent_commission) / 100;
                                                                        $total = $amount + $commission;
                                                                        $daily = $commission / preg_replace('~\D~', '', $investment->duration);

                                                                        
                                                                        
                                                                        ////////////////CURRENT AMOUNT/////////////////////
                                                                        
                                                                        $time_started = strtotime($investment->created_at);
                                                                        $elapsed = time() - $time_started;
                                                                        $counts = floor($elapsed / (60 * 60 * 24)) == 0 || floor($elapsed / (60 * 60 * 24)) == -1 ? 1 : floor($elapsed / (60 * 60 * 24));
                                                                        
                                                                        $daily_earnings = $investment->amount + $daily * $counts;

                                                                        
                                                                        ?>
                                                                        <?php
                                                                        $start = strtotime($investment->created_at);
                                                                        $stop = strtotime($investment->close_date);
                                                                        $today = time();
                                                                        $days_diff = $stop - $start;
                                                                        $remaining_days = ($today - $start) / 86400;
                                                                        $no_of_days = $investment->duration;
                                                                        $exploded = explode(' ', $no_of_days);
                                                                        $numeric = (int) $exploded[0];
                                                                        $actual_close_date = strtotime($investment->close_date) - (24*60*60);
                                                                        $actual_closing_date =  gmdate("Y-m-d\TH:i:s\Z", $actual_close_date);
                                                                        //   echo gettype($investment->duration);
                                                                      
                                                                        ?>
                                                                        @if ($remaining_days < 8)
                                                                            <td>{{ floor($daily_earnings) }}</td>
                                                                        @else
                                                                            <td>{{ floor($investment->amount + $daily * $numeric) }}
                                                                            </td>
                                                                        @endif

                                                                         @if ($remaining_days < 1)
                                                                                 <td>{{ 'Day 1/'. $investment->duration }}</td>
                                                                            @elseif ($remaining_days < 8)
                                                                               <td>{{  'Day'.round(intval($remaining_days)) .
                                                                                '/' . $investment->duration }}</td>
                                                                            @elseif ($remaining_days > 7)
                                                                                <td><h6 style="color:green; font-size:12px">completed</h6></td>
                                                                            @endif
                                                                        <td>{{ $investment->currency == 'USD' ? number_format($daily, 0, '.', ',') : $daily }}
                                                                        </td>


                                                                        <td>{{ date('d M,Y', strtotime($investment->created_at)) }}
                                                                        </td>

                                                                        <td> <b
                                                                                class="text-danger">{{ date('d M,Y', strtotime($actual_closing_date)) }}</b>
                                                                        </td>
                                                                        <td>{{ ucwords($investment->duration) }}</td>
                                                                        <td>{{ ucwords($investment->percent_commission) }}%
                                                                        </td>



                                                                        <td
                                                                            class="{{ strtolower(config('app.tx_status')[$investment->status]) }}">
                                                                            {{ ucwords(config('app.tx_status')[$investment->status]) }}
                                                                        </td>



                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    @else
                                                        <h4 class="text-center">No Investment at the moment</h4>
                                                    @endif
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        {{-- table ends --}}
                                    </div>
                                </div><!-- .row -->
                            </div><!-- .nk-block -->
                            <!-- recent activities -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                    <div class="col-md-12">
                                        {{-- table start --}}
                                        @if (!$withdrawals->isEmpty())
                                            <div class="card card-bordered card-preview">
                                                <div class="card-inner">
                                                    <div class="table-responsive">
                                                        <h5> Your Recent Withdrawal </h5>
                                                        <hr>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>

                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Message</th>
                                                                    <th scope="col">Currency</th>
                                                                    <th scope="col">Amount</th>
                                                                    <th scope="col">Method Of Payment</th>
                                                                    <th scope="col">Address</th>
                                                                    <th scope="col">Date</th>
                                                                    <th scope="col">Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($withdrawals as $item => $data)
                                                                    <tr>
                                                                        <td>{{ $item + 1 }}</td>
                                                                        <td>{{ $data->message }}</td>
                                                                        <td>{{ $data->currency }}</td>
                                                                        <td>{{ $data->currency == 'USD' ? number_format($data->amount, 0, '.', ',') : $data->amount }}
                                                                        </td>
                                                                        <td>{{ $data->withdrawal_payment_method }}
                                                                        </td>
                                                                        <td>{{ $data->withdrawal_address }}</td>
                                                                        <td>{{ date('d M, Y', strtotime($data->created_at)) }}
                                                                        </td>
                                                                        <td
                                                                            class="{{ strtolower(config('app.tx_status')[$data->status]) }}">
                                                                            {{ ucwords(config('app.tx_status')[$data->status]) }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div><!-- .card-preview -->
                                        @else
                                            <p class="text-center">No withdrawal request now</p>
                                        @endif

                                        {{-- table ends --}}
                                    </div>
                                </div><!-- .row -->
                            </div><!-- .nk-block -->



                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('includes.c_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    {{-- footer --}}
    @include('includes.c_script')
    <!-- END PAGE CONTAINER-->
</body>

</html>
