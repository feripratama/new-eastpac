@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('dist/css/contribution.css')}}">
<style>
.step-number {
    flex-shrink: 0;
    height: 48px;
    width: 48px;
    font-size: 16px;
    color: #758698;
    border: 2px solid #b1becc;
    text-align: center;
    line-height: 45px;
    border-radius: 50%;
    margin-right: 12px;
    margin-top: 4px;
    margin-bottom: 4px;
}
.note {
    padding: 15px 15px 15px 45px;
    border-radius: 4px;
    position: relative;
}
.note-info {
    background: #edf5ff;
}
.note-danger {
    background: rgba(255, 0, 0, 0.05);
}

#clockdiv{
  font-family: sans-serif;
  color: #fff;
  display: contents;
  font-weight: 100;
  text-align: center;
  font-size: 20px;

}

#clockdiv td > div{
  padding: 3px;
  border-radius: 5px;
/*  background: #701296;*/
  display:table-cell;
  margin-left: 0px;
}
	#clockdiv table{
		margin: auto;
	}
	#clockdiv table td{
		padding: 1px;
	}
#clockdiv td div > span{
    padding: 5px;
    border-radius: 5px;
    background: #b060d0;
}
.smalltext{
  padding-top: 5px;
  font-size: 10px;
}
.token-countdown{
  background: #f39c12;
  padding: 0px;
}
.token-countdown-title{
  color: #fff;
  margin-bottom: 10px;
}
	.txt-cur p{ margin-bottom: 0px;}
	.txt-cur p:first-child{ margin-top: 15px;}
</style>
@endsection

@section('content')

<section class="content">
        <div class="box box-warning">
            <!-- <div class="box-header with-border">
              <h2 class="box-title">Buy Tokens</h2>
             </div> -->
               <div class="row" style="margin:20px 20px 20px 20px">
                <div class="col-md-8">
                <!-- <div class="box box-solid box-warning"> -->
                  <div class="status status-empty">
                        <div class="user-panel" style="text-align:left;" >
                        <form action="#">
                            <div class="row" style="display:none">
                              <div class="step-head" style="display: flex; align-items: center">
                                <div class="step-number">01</div>
                                <div class="step-head-text">
                                  <h4 class="pull-left">Select the payment method and calculate token price</h4>
                                </div>
                             </div> <hr>
                             <div class="gaps-1x"></div>
                                <div class="payment-list">
                                <div class="row">
                                   <div class="col-md-3 col-sm-6">
                                        <div class="payment-item">
                                            <input class="payment-check" type="radio" id="payeth" name="payOption" value="tranxETH" checked="">
                                            <label for="payeth">
                                                <div class="payment-icon payment-icon-eth"><img src="{{asset('dist/img/icon-ethereum.png')}}" alt="icon"></div>
                                                <span class="payment-cur">Ethereum</span>
                                            </label>
                                            <span>@ 0.1 ETH</span>
                                        </div>
                                   </div><!-- .col -->
                                   <div class="col-md-3 col-sm-6">
                                        <div class="payment-item">
                                            <input class="payment-check" type="radio" id="paylightcoin" name="payOption" value="tranxLTC" >
                                            <label for="paylightcoin">
                                                <div class="payment-icon payment-icon-ltc"><img class="payment-icon" src="{{asset('dist/img/icon-lightcoin.png')}}" alt="icon"></div>
                                                <span class="payment-cur">Litecoin</span>
                                            </label>
                                            <span>@ 0.1 LTC</span>
                                        </div>
                                   </div>
                                   <div class="col-md-3 col-sm-6">
                                       <div class="payment-item">
                                            <input class="payment-check" type="radio" id="paybtc" name="payOption" value="tranxBTC" disabled>
                                            <label for="paybtc">
                                                <div class="payment-icon payment-icon-btc"><img class="payment-icon" src="{{asset('dist/img/icon-bitcoin.png')}}" alt="icon"></div>
                                                <span class="payment-cur">Bitcoin</span>
                                            </label>
                                            <span>@ 0.05 BTC</span>
                                        </div>
                                   </div>
                                   <div class="col-md-3 col-sm-6">
                                       <div class="payment-item">
                                            <input class="payment-check" type="radio" id="payusd" name="payOption" value="tranxUSD" disabled>
                                            <label for="payusd">
                                                <div class="payment-icon payment-icon-usd"><img class="payment-icon" src="{{asset('dist/img/icon-dollar.png')}}" alt="icon"></div>
                                                <span class="payment-cur">US Dollar</span>
                                            </label>
                                            <span>@ 0.5 USD</span>
                                        </div>
                                   </div>
                                </div><!-- .row -->
                            </div><!-- .payment-list -->
                            <hr>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="step-head" style="display: flex; align-items: center">
                                    <div class="step-number">01</div>
                                    <div class="step-head-text">
                                      <h4 class="pull-left">Amount of Contribution</h4>
                                    </div>
                                  </div>
                                  <hr>
                                  <p>Enter your amount, you would like to contribute and calculate the amount of token you will received. The calculator helps to convert required currency to tokens.</p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4">
                                  <label>Token To Purchase</label>
                                <div class="input-group input-group-lg">
                                    <input type="number" class="form-control" value="0" style="border:1px solid #f39c12" id="est" onKeyUp="">
                                    <div class="input-group-btn">
                                      <button class="btn btn-warning" type="submit">EST</button>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-md-1" style=" text-align: center; margin-top:40px"><i class="fa fa-exchange"></i></div>
                               <div class="col-md-4">
                                <label>Payment Amount</label>
                                <div class="input-group input-group-lg">
                                  <input type="number" class="form-control" value="0.00000" style="border:1px solid #f39c12" id="eth" onchange="">
                                  <span class="input-group-btn">
                                    <button class="btn btn-warning" type="submit">ETH</button>
                                  </span>
                                </div>
                              </div>
                              <div class="col-md-3 txt-cur">
                                <p>Current bonus</p>
                                <p><b>20%</b><small> on pre-sales</small></p>
                                <p><small>End at- 09 Aug 2019</small></p>
                              </div>
                            </div><hr>

                            <div class="gaps-1x"></div>
                            <div class="payment-calculator-note"><i class="fa fa-info-circle" style="color:#f39c12"></i>The calculator helps you to convert required currency to EAST tokens.</div>
                            <div class="gaps-3x"></div>
                            <div class="payment-summary">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="payment-summary-item payment-summary-final">
                                            <h6 class="payment-summary-title">Final Payment</h6>
                                            <div class="payment-summary-info">
                                                <span class="payment-summary-amount" id="finaleth">0.00</span> <span>eth</span>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-4">
                                        <div class="payment-summary-item payment-summary-bonus">
                                            <h6 class="payment-summary-title">Received Bonus</h6>
                                            <div class="payment-summary-info">
                                                <span>+</span> <span class="payment-summary-amount" id="estbonus">0.00</span> <span>east</span>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-4">
                                        <div class="payment-summary-item payment-summary-tokens">
                                            <h6 class="payment-summary-title">Tokens Received</h6>
                                            <div class="payment-summary-info">
                                                <span class="payment-summary-amount" id="totaltoken">0</span> <span>est</span>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .payment-summary -->
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="step-head" style="display: flex; align-items: center">
                                    <div class="step-number">02</div>
                                    <div class="step-head-text">
                                      <h4 class="pull-left">Make a payment</h4>
                                    </div>
                                  </div>
                                  <hr>
                                  <p>To get tokens please make a payment. You can send payment directly to our address or you may pay online. Once you paid, you will receive an email about the successfull deposit.</p>
                              </div>

                            </div>

                            <button type="button" class="btn btn-lg btn-warning pull-right" data-toggle="modal" data-target="#tranxETH" id="trans-form">
                               Get Address for Pay
                            </button>
                        </form><!-- form -->
                    </div>
                   </div>
                   <!-- </div> -->

            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12">
                   <button class="btn btn-lg btn-warning" style="width:100%" data-toggle="modal" data-target="#walletModal"><span class="pull-left">Add your wallet address before buy</span> <i class="fa fa-long-arrow-right pull-right"></i></button>
                </div>
              </div><br>
             <div class="row">
                <div class="col-md-12">
                    <div class="tile-item tile-primary">
                      <div class="tile-bubbles"></div>
                      <h6 class="tile-title">YOUR CONTRIBUTION</h6>
                      <h1 class="tile-info">1646 ETH</h1>
                  </div>
                  </div>
              </div><br>
              <div class="row">
                   <div class="col-md-12">
                      <div class="box box-solid box-warning">
                        <div class="box-header with-border">
                          <div class="box-title"><h3>Presale Token Sale</h3></div>
                        </div>
                        <div class="box-body">
                            <h6>EXCHANGE RATE</h6>
                            <h3>1 ETH = <b style="color:#f39c12">10 EAST</b></h3>
                            <hr>
                            <!-- countdown-->
                            <div class="token-countdown" style="padding-bottom: 10px; margin-top: 10px;">
                              <span class="token-countdown-title">SALE END IN</span>
                                  <div id="clockdiv">
                                    <table>
                                         <tr>
                                            <td>
                                                  <div>
                                                    <span class="days"></span>
                                                    <div class="smalltext">Days</div>
                                                   </div>
                                              </td>
                                              <td>
                                                 <div>
                                                    <span class="hours"></span>
                                                    <div class="smalltext">Hours</div>
                                                 </div>
                                              </td>
                                              <td>
                                                  <div>
                                                    <span class="minutes"></span>
                                                    <div class="smalltext">Minutes</div>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div>
                                                  <span class="seconds"></span>
                                                  <div class="smalltext">Seconds</div>
                                                 </div>
                                              </td>
                                           </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                      </div>
                   </div>
              </div>
            </div>
        </div>
        <br>
      </div>


</section>
<div class="modal fade" id="tranxETH" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="tranx-popup">
                <h5>Purchase Details ETH</h5>
                <div class="tranx-payment-details">
                    <p>Hi, Your transaction <strong>{{$transaction_code}}</strong> is <strong>Pending Payment</strong><br> You will receive <strong id="recv">0 EAST</strong> tokens (incl. bonus of 450 EAST) once paid.</p>
                    <h6>Please make your Payment to the bellow Address</h6>
                    <div class="tranx-payment-info">
                        <span class="tranx-copy-feedback copy-feedback"></span>
                        <i class="fa fa-ethereum"></i>
                        <input type="text" class="tranx-payment-address" value="0xb2a122ed4A1903fe3FF587A13Cb8A95a052851aA" disabled="">
                        <button class="tranx-payment-copy copy-clipboard-modal" data-clipboard-text="0xb2a122ed4A1903fe3FF587A13Cb8A95a052851aA"><i class="fa fa-copy"></i></button>
                    </div><!-- .tranx-payment-info --><!-- @updated on v1.0.1 -->
                    <ul class="tranx-info-list">
                        <li><span>SET GAS LIMIT:</span> 120 000</li>
                        <li><span>SET GAS PRICE:</span> 95 Gwei</li>
                    </ul><!-- .tranx-info-list -->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="tranx-info-qr">
                                <span>OR Scan bellow QR Code to pay</span>
                                <img class="tranx-info-qrimg" src="{{asset('dist/img/eth-qr.png')}}" alt="qr" style="margin-left: 15%">
                                <div class="gaps-4x"></div><br>
<!--                                    <ul class="btn-grp guttar-20px">-->
                                    <button href="#" class="btn btn-primary" id="get-payment">Yes, I want</button>
                                    <button href="#" class="btn btn-danger" data-dismiss="modal">No, Thanks</button>
<!--                                    </ul>-->
                            </div>
                        </div><!-- .col -->
                        <div class="col-sm-7">
                            <div class="note note-info">
                                <i class="fa fa-info-circle" style="color:#93d1ff;"></i>
                                <p>Do not make payment through exchange (Kraken, Bitfinex). You can use MetaMask, MayEtherWallet, Mist wallets etc.</p>
                            </div>
                            <div class="gaps-1x"></div>
                            <div class="note note-danger">
                                <i class="fa fa-info-circle" style="color:#ff4b4b"></i>
                                <p>In case you send a different amount ETH, the number of ICOX tokens will update accordingly.</p>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .tranx-payment-details -->
            </div><!-- .tranx-popup -->
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="walletModal" style="display: none;">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header"><h3>Wallet Address</h3></div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-12">
            <p>In order to receive your EAST Tokens, please select your wallet address and you have to put the address below input box. You will receive EAST tokens to this address after the Token Sale end.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
                <label for="username">Select Wallet</label>
                <div class="input-group input-group" style="width: 100%">
                  <select class="form-control" style="border:1px solid #f39c12">
                    <option>Ethereum</option>
                  </select>
                </div>
            </div>
        </div>
        <div class="col-md-9">
          <div class="form-group">
                <label for="username">Your Token Address</label>
                <div class="input-group input-group" style="width: 100%">
                  <input type="text" class="form-control" id="password_now" placeholder="" style="border:1px solid #f39c12;" value="0x09456d75377f56692d9c57d679e2d5108ad96110">
                </div>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <button class="btn btn-lg btn-warning pull-right">Add Wallet</button>
        </div>
      </div>


    </div>
  </div>
</div>
</div>
</div>

</div>
@endsection

@section('script')
<script src="{{asset('dist/js/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('dist/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('web3.js/dist/web3.min.js')}}"></script>
<script>

web3.eth.defaultAccount = web3.eth.accounts[0];
        var EASTPACContract = web3.eth.contract([
        {
            "constant": false,
            "inputs": [
			{
				"name": "_spender",
				"type": "address"
			},
			{
				"name": "_value",
				"type": "uint256"
			}
            ],
            "name": "approve",
            "outputs": [
			{
				"name": "success",
				"type": "bool"
			}
            ],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        },
        {
            "constant": false,
            "inputs": [
			{
				"name": "_spender",
				"type": "address"
			},
			{
				"name": "_value",
				"type": "uint256"
			},
			{
				"name": "_extraData",
				"type": "bytes"
			}
            ],
            "name": "approveAndCall",
            "outputs": [
			{
				"name": "success",
				"type": "bool"
			}
            ],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        },
        {
            "constant": false,
            "inputs": [
			{
				"name": "_value",
				"type": "uint256"
			}
            ],
            "name": "burn",
            "outputs": [
			{
				"name": "success",
				"type": "bool"
			}
            ],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        },
        {
            "constant": false,
            "inputs": [
			{
				"name": "_from",
				"type": "address"
			},
			{
				"name": "_value",
				"type": "uint256"
			}
            ],
            "name": "burnFrom",
            "outputs": [
			{
				"name": "success",
				"type": "bool"
			}
            ],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        },
        {
            "constant": false,
            "inputs": [],
            "name": "buy",
            "outputs": [],
            "payable": true,
            "stateMutability": "payable",
            "type": "function"
        },
        {
            "constant": false,
            "inputs": [
			{
				"name": "target",
				"type": "address"
			},
			{
				"name": "freeze",
				"type": "bool"
			}
            ],
            "name": "freezeAccount",
            "outputs": [],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        },
        {
            "constant": false,
            "inputs": [
			{
				"name": "target",
				"type": "address"
			},
			{
				"name": "mintedAmount",
				"type": "uint256"
			}
            ],
            "name": "mintToken",
            "outputs": [],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        },
        {
            "constant": false,
            "inputs": [
			{
				"name": "amount",
				"type": "uint256"
			}
            ],
            "name": "sell",
            "outputs": [],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        },
        {
            "constant": false,
            "inputs": [
			{
				"name": "newSellPrice",
				"type": "uint256"
			},
			{
				"name": "newBuyPrice",
				"type": "uint256"
			}
            ],
            "name": "setPrices",
            "outputs": [],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        },
        {
            "constant": false,
            "inputs": [
			{
				"name": "_to",
				"type": "address"
			},
			{
				"name": "_value",
				"type": "uint256"
			}
            ],
            "name": "transfer",
            "outputs": [
			{
				"name": "success",
				"type": "bool"
			}
            ],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        },
        {
            "constant": false,
            "inputs": [
			{
				"name": "_from",
				"type": "address"
			},
			{
				"name": "_to",
				"type": "address"
			},
			{
				"name": "_value",
				"type": "uint256"
			}
            ],
            "name": "transferFrom",
            "outputs": [
			{
				"name": "success",
				"type": "bool"
			}
            ],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        },
        {
            "constant": false,
            "inputs": [
			{
				"name": "newOwner",
				"type": "address"
			}
            ],
            "name": "transferOwnership",
            "outputs": [],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        },
        {
            "inputs": [
			{
				"name": "initialSupply",
				"type": "uint256"
			},
			{
				"name": "tokenName",
				"type": "string"
			},
			{
				"name": "tokenSymbol",
				"type": "string"
			}
            ],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "constructor"
        },
        {
            "anonymous": false,
            "inputs": [
			{
				"indexed": false,
				"name": "target",
				"type": "address"
			},
			{
				"indexed": false,
				"name": "frozen",
				"type": "bool"
			}
            ],
            "name": "FrozenFunds",
            "type": "event"
        },
        {
            "anonymous": false,
            "inputs": [
			{
				"indexed": true,
				"name": "from",
				"type": "address"
			},
			{
				"indexed": true,
				"name": "to",
				"type": "address"
			},
			{
				"indexed": false,
				"name": "value",
				"type": "uint256"
			}
            ],
            "name": "Transfer",
            "type": "event"
        },
        {
            "anonymous": false,
            "inputs": [
			{
				"indexed": true,
				"name": "_owner",
				"type": "address"
			},
			{
				"indexed": true,
				"name": "_spender",
				"type": "address"
			},
			{
				"indexed": false,
				"name": "_value",
				"type": "uint256"
			}
            ],
            "name": "Approval",
            "type": "event"
        },
        {
            "anonymous": false,
            "inputs": [
			{
				"indexed": true,
				"name": "from",
				"type": "address"
			},
			{
				"indexed": false,
				"name": "value",
				"type": "uint256"
			}
            ],
            "name": "Burn",
            "type": "event"
        },
        {
            "constant": true,
            "inputs": [
			{
				"name": "",
				"type": "address"
			},
			{
				"name": "",
				"type": "address"
			}
            ],
            "name": "allowance",
            "outputs": [
			{
				"name": "",
				"type": "uint256"
			}
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        },
        {
            "constant": true,
            "inputs": [
			{
				"name": "",
				"type": "address"
			}
            ],
            "name": "balanceOf",
            "outputs": [
			{
				"name": "",
				"type": "uint256"
			}
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        },
        {
            "constant": true,
            "inputs": [],
            "name": "buyPrice",
            "outputs": [
			{
				"name": "",
				"type": "uint256"
			}
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        },
        {
            "constant": true,
            "inputs": [],
            "name": "decimals",
            "outputs": [
			{
				"name": "",
				"type": "uint8"
			}
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        },
        {
            "constant": true,
            "inputs": [
			{
				"name": "",
				"type": "address"
			}
            ],
            "name": "frozenAccount",
            "outputs": [
			{
				"name": "",
				"type": "bool"
			}
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        },
        {
            "constant": true,
            "inputs": [],
            "name": "name",
            "outputs": [
			{
				"name": "",
				"type": "string"
			}
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        },
        {
            "constant": true,
            "inputs": [],
            "name": "owner",
            "outputs": [
			{
				"name": "",
				"type": "address"
			}
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        },
        {
            "constant": true,
            "inputs": [],
            "name": "sellPrice",
            "outputs": [
			{
				"name": "",
				"type": "uint256"
			}
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        },
        {
            "constant": true,
            "inputs": [],
            "name": "symbol",
            "outputs": [
			{
				"name": "",
				"type": "string"
			}
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        },
        {
            "constant": true,
            "inputs": [],
            "name": "totalSupply",
            "outputs": [
			{
				"name": "",
				"type": "uint256"
			}
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        }
        ]);
        var EASTPAC = EASTPACContract.at('0x279d4d11eac71598cdde68d9ecc27f1b395682a0');

        // console.log(EASTPAC);
        // $("#button").click(function() {

        //     EASTPAC.transfer($("#_to").val(), $("#_value").val(), function(error,a)
        //     {
        //         console.log(a);
        //     }

        //     );
        // });

    function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);

/*calculation*/

    function bonusEst(val1){
        var calBonus = ((val1 * 1) * 20) / 100;
        return calBonus;
    }

    $(document).ready(function(){
        $('#trans-form').click(function() {
            $('#recv').text($('#est').val()+' EAST');
        })
       $('#est').keyup(function(){
            var resultEst = ($('#est').val() * 1) / 10;
            {{--var resultEst = ($('#est').val() * 1) / {{$get_eth_price}};--}}
            var bnsEst = bonusEst($(this).val());
            var resultTok = ($(this).val() * 1) + bnsEst;
            $('#eth').val(resultEst.toFixed(18));
            $('#finaleth').text(resultEst.toFixed(18));
            $('#estbonus').text(bnsEst);
            $('#totaltoken').text(parseFloat(resultTok).toFixed(18));
       });

       $('#eth').keyup(function(){

           var resultEth = ($('#eth').val() * 1) * 10;
            {{--var resultEth = ($('#eth').val() * 1) * {{$get_eth_price}};--}}
           $('#est').val(resultEth);
           $('#finaleth').text($(this).val());
           var bnsEst = bonusEst($('#est').val());
           $('#estbonus').text(bnsEst);
           var resultTok = ($('#est').val() * 1) + bnsEst;
           $('#totaltoken').text(parseFloat(resultTok).toFixed(18));
       });

       $('#get-payment').click(function() {
            // console.log($('#eth').val());
            // console.log($('#est').val());
            // disable button
            $(this).attr('disabled','');
            $(this).text('Please wait ...');
            $.ajax({
                method: "post",
                url: '{{ route("home.contribution.process") }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    eth: $('#eth').val(),
                    est: $('#est').val()
                },
                success:function(ac,b) {
                    $('#get-payment').removeAttr('disabled');
                    $('#get-payment').text('Yes, I want');
                    console.log(ac.jdata)
                    EASTPAC.transfer(ac.to_address, ac.east_val, function(error,a)
                    {
                        swal({
                            text: `${ac.msg}`,
                            title: ac.title,
                            icon: ac.icon,
                            type: ac.type
                        }).then(() => {
                            // window.location.reload()
                        });
                    });
                    //window.testing =a;
                    //alert(a.jdata)
                    // console.log(1)

                },
                error:function(a)
                {
                    // console.log(2)
                    swal({
                        text: `Something Wrong`,
                        title: 'Error',
                        icon: 'error',
                        type: 'error'
                    }).then(() => {
                        window.location.reload();
                    });

                }
            })
        })
    });




    </script>

@endsection
