<?php

#$tickers =  array(1 => 'PETR4',2 => 'ABEV3', 3 => 'VIIA3', 4 => 'VALE3', 5 => 'PLPL3' );

$tickers = ['ABEV3','AMER3','AZUL4','B3SA3','BBAS3','BBDC3','BBDC4','BBSE3'#,'BEEF3','BPAC11','BRAP4','BRDT3','BRFS3','BRKM5','BRML3','CCRO3','CIEL3','CMIG4','COGN3','CSAN3','CSNA3','CVCB3','CYRE3','ECOR3','EGIE3','ELET3','ELET6','EMBR3','ENBR3','EQTL3','FLRY3','GGBR4','GOAU4','HYPE3','IRBR3','ITSA4','ITUB4','JBSS3','JHSF3','KLBN11','LAME4','LREN3','MGLU3','MRFG3','MRVE3','MULT3','NTCO3','PCAR3','PETR3','PETR4','RADL3','RAIL3','RENT3','SBSP3','SUZB3','TAEE11','UGPA3','USIM5','VALE3','VIVT3','VIIA3','WEGE3','YDUQ3'
];

?>

<div class="main">

<?php for ($i=0; $i < count($tickers); $i++) {  ?>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="margin: 5px; float: left;">
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
  {
  "interval": "1D",
  "width": "400",
  "isTransparent": false,
  "height": "425",
  "symbol": "BMFBOVESPA:<?=$tickers[$i]?>",
  "showIntervalTabs": true,
  "locale": "br",
  "colorTheme": "dark"
}
  </script>
</div>
<!-- TradingView Widget END -->

<?php } ?>

</div>
