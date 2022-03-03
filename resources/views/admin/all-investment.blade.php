<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    @include('includes.a_css')
    <!-- Page Title  -->
    <title>{{ config('app.name') }} Admin</title>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('includes.a_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('includes.a_topbar')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">All Customer Investments</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>This is the list of all investments of customers.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-md-12">
                                            {{-- table start --}}
                                            <div class="card card-bordered card-preview">
                                                <div class="card-inner">
                                                    <div class="table-responsive">
                                                        @if (!$investments->isEmpty())
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>

                                                                        <th scope="col">Username</th>
                                                                        <th scope="col">Currency</th>
                                                                        <th scope="col">Invested Amount</th>
                                                                        <th scope="col">Current Amount</th>
                                                                        <th scope="col">Days of investment</th>
                                                                        <th scope="col">Daily </th>
                                                                        <th scope="col">Start/End Date</th>

                                                                        <th scope="col">Duration</th>
                                                                        <th scope="col">Commission</th>
                                                                        <th scope="col">Status</th>
                                                                        <th scope="col">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($investments as $key => $investment)
                                                                        <tr>

                                                                            <th scope="row">
                                                                                {{ ucwords($investment->username) }}
                                                                            </th>
                                                                            <td>{{ ucwords($investment->currency) }}
                                                                            </td>
                                                                            <td>{{ $investment->currency == 'USD' ? number_format($investment->amount, 0, '.', ',') : $investment->amount }}
                                                                            </td>
                                                                            <?php
                                                                            $amount = $investment->amount;
                                                                            $commission = ($amount * $investment->percent_commission) / 100;
                                                                            $total = $amount + $commission;
                                                                            $daily = $commission / preg_replace('~\D~', '', $investment->duration);
                                                                            // echo $daily;
                                                                            
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
                                                                             $exploded = explode(" ",$no_of_days);
                                                                             $numeric =  (int)$exploded[0];
                                                                             ?>
                                                                             {{-- <td>{{ $remaining_days < 1? 'Day 1/' . $investment->duration: 'Day' . round(intval($remaining_days)) . '/' . $investment->duration }}
                                                                             </td> --}}
                                                                             @if ($remaining_days < 8)
                                                                             <td>{{ floor($daily_earnings) }}</td>
                                                                             @else
                                                                             <td>{{ floor($investment->amount + $daily * $numeric) }}</td>
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
                                                                                / <b
                                                                                    class="text-danger">{{ date('d M,Y', strtotime($investment->close_date)) }}</b>
                                                                            </td>
                                                                            <td>{{ ucwords($investment->duration) }}
                                                                            </td>
                                                                            <td>{{ ucwords($investment->percent_commission) }}%
                                                                            </td>



                                                                            <td>{{ ucwords(config('app.tx_status')[$investment->status]) }}
                                                                            </td>

                                                                            <td>
                                                                                <a
                                                                                    href="{{ route('admin.deposit.view', ['edit', $investment->id]) }}">
                                                                                    <em class="icon ni ni-edit"></em>
                                                                                </a>

                                                                                <a class="delete_data text-danger"
                                                                                    href="{{ route('admin.deposit.view', ['delete', $investment->id]) }}"
                                                                                    data-type="deposit">
                                                                                    <em class="icon ni ni-trash-fill "></em>
                                                                                </a>

                                                                                <a class="add_investments"
                                                                                href="{{ route("admin.deposit.view",["addInvestment", $investment->id]) }}">
                                                                                    <em class="icon ni ni-home"></em>
                                                                                </a>

                                                                                <a class="add_ref"
                                                                                href="{{ route("admin.deposit.view",["addRef",$investment->user_id]) }}">
                                                                                    <em class="icon ni ni-location"></em>
                                                                                </a>


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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('includes.a_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    @include('includes.a_scripts')
</body>

</html>
