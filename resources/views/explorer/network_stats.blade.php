<div class="row">
  <div id="wide-header">
    <div class="col-xs-6 col-md-3 col-sm-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-4 text-center">
              <i class="fa fa-cogs fa-2x"></i>
            </div>
            <div class="col-xs-8">
              <span class="large">Difficulty </span>
            </div>
          </div>
        </div>
        <div class="panel-footer text-center">
        <span class="large">{{ $net_stats['diff'] }}</span>
        <div class="clearfix"></div>
        </div>
      </div>
    </div>

    <div class="col-xs-6 col-md-3 col-sm-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-4 text-center">
              <i class="fa fa-bars fa-2x"></i>
            </div>
            <div class="col-xs-8">
              <span class="large">Height </span>
            </div>
          </div>
        </div>
        <div class="panel-footer text-center">
          <span class="large">{{ $net_stats['height'] }}</span>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>

  <div class="col-xs-6 col-md-3 col-sm-6">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-4 text-center">
            <i class="fa fa-tachometer fa-2x"></i>
          </div>
          <div class="col-xs-8 col-md-7">
            <span class="large">Hashrate </span>
          </div>
        </div>
      </div>
      <div class="panel-footer text-center">
        <span class="large">{{ number_format($net_stats['hashrate']/1000000,1,'.','') }}&nbsp;<small>Mh/s </small></span>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
    
    <div class="col-xs-6 col-md-3 col-sm-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-4 text-center">
              <i class="fa fa-money fa-2x"></i>
            </div>
            <div class="col-xs-8 col-md-7">
              <span class="large">Emission </span>
            </div>
          </div>
        </div>
          <div class="panel-footer text-center">
            <span class="large">{{ $net_stats['emission'] }}</span>
            <div class="clearfix"></div>
          </div>
      </div>
    </div>
    
  </div>
</div> <!-- ./row -->