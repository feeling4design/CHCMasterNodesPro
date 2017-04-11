<div class="row bar">
    <div class="col-md-12" style="text-align: center;">
        <div class="col-md-1"></div>
        <div class="col-md-10" style="display: inline-block;">
            <div class="col-md-2 bardata">
                <div class="bardatatitle">Total Masternodes</div>
                <div class="bardatadata">{!! $totalnodes[0]['total'] !!}</div>
            </div>
            <div class="col-md-2 bardata">
                <div class="bardatatitle">Avg. Block Rewards</div>
                <div class="bardatadata">{!! number_format($avgblocks,'2','.',',') !!}</div>
            </div>
            <div class="col-md-2 bardata">
                <div class="bardatatitle">Daily ION Earned</div>
                <div class="bardatadata">{!! number_format($iondaily,'2','.','') !!}</div>
            </div>
            <div class="col-md-2 bardata">
                <div class="bardatatitle">Daily Income</div>
                <div class="bardatadata">$<span>{!! number_format($incomedaily,'2','.',',') !!}</span></div>
            </div>
            <div class="col-md-2 bardata">
                <div class="bardatatitle">Weekly Income</div>
                <div class="bardatadata">$<span>{!! number_format($incomeweekly,'2','.',',') !!}</span></div>
            </div>
            <div class="col-md-2 bardata">
                <div class="bardatatitle">Monthly Income</div>
                <div class="bardatadata">$<span>{!! number_format($incomemonth,'2','.',',') !!}</span></div>
            </div>
            <div class="col-md-2 bardataend">
                <div class="bardatatitle">ION Price</div>
                <div class="bardatadata">$<span>{!! number_format($price_usd,'2','.',',') !!}</span></div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
