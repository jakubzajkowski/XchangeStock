@extends('layout.root')
@section('support')
<main class="w-100 text-dark">
    <section class="w-100 mx-auto bg-primary">
        <div class="bg-primary w-100 p-5">
            <div class="w-75 mx-auto bg-white p-1">
                <h1 class="p-2">Global Volatility: Service Center</h1>
            </div>
        </div>
    </section>
    <section class="w-100 mx-auto">
        <div class="container w-75 p-4 mx-2 my-5 text-dark mx-auto" style="font-size: 1.2rem">
            <p>Market volatility has caused unusually high wait times. In order to service your needs efficiently, we have complied a list of the most frequently asked questions during this time. We will continue to provide updates as the situation evolves, we encourage you to check back often to learn about the status and any changes of our service.</p>
        </div>
    </section>
    <section class="w-100 text-dark" style="background-color: rgb(53, 201, 39)">
        <div class="container w-75 p-2 mx-2 text-white mx-auto">
            <div class="align-items-center">
               <p class="h4">We're currently experiencing high call volume. For fastest service please contact us via Live Chat</p>
            </div>
        </div>
    </section>
    <section class="w-100 mx-auto">
        <div class="container w-75 p-4 mx-2 my-3 mx-auto">
            <h2 class="text-center p-4">STATUS CENTER</h2>
            <table class="table table-bordered">
                <tr>
                    <th class="bg-primary text-white">
                        SERVICES
                    </th>
                    <th class="bg-success text-white">
                        STATUS
                    </th>
                </tr>
                <tr>
                    <td>MetaTrader mobile app</td>
                    <td>As of September 24, 2022, the MetaTrader mobile app is no longer available on the iOS App Store globally. If you currently have the application on your iOS device, please be careful not to delete it, or you may lose access. If you can’t access the iOS app, we recommend using Mobile Web terminals for your mobile trading.</td>
                </tr>
                <tr>
                    <td>Trading Platforms</td>
                    <td>N/A</td>
                </tr>
                <tr>
                    <td>Margin Requirements</td>
                    <td>N/A</td>
                </tr>
                <tr>
                    <td>Funding & Withdrawals</td>
                    <td>N/A</td>
                </tr>
                <tr>
                    <td>Markets and Trading</td>
                    <td>On response to volatility, trading on some of our commodity markets such as corn, wheat and oats may be impacted. These markets may be set to limit down/limit up or phone-only. Please check market information sheets for the latest information.Expect volatility across a number of other markets.</td>
                </tr>
                <tr>
                    <td>Inactivity Fees</td>
                    <td>N/A</td>
                </tr>
            </table>
        </div>
    </section>
    <section class="w-100 text-dark">
        <div class="container w-75 p-2 my-3 mx-2 mx-auto">
            <div class="align-items-center">
               <h2 class="text-center my-4">Popular FAQs</h2>
               <div class="accordion accordion-flush my-4" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Where do I get my password?
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        If you forgot your username, please contact us for assistance. If you forgot your password, please click here to reset your password.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        What is the fastest way to fund my account?
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        You can securely fund your account by logging in to MyAccount and visiting the Funding page.

FOREX.com cannot accept deposits from third parties. Please note that you may experience longer processing times if the name on the originating account does not match your FOREX.com account.

There are four easy ways to fund your account:

Bank Transfer – Recommended
You can transfer a maximum of $10,000 or currency equivalent per transaction and funds will typically be available immediately for trading. The minimum transaction for bank transfers is $100 per transaction. We accept USD, no fee for bank transfers.

Debit Card
You can deposit a maximum of $10,000 (or currency equivalent) per transaction and funds will typically be available immediately for trading. The minimum transaction for bank transfers is $100 per transaction. We accept Visa in USD, GBP and EUR. However, please be aware that all debit card transactions are automatically converted to USD.

FOREX.com does not charge fees for incoming card deposits. If you deposit funds from abroad, you may be charged a cross-border fee or currency conversion fee by your issuing bank.

Wire Transfer
There is no minimum or maximum deposit amount for wire transfers. Wire transfers may take up to 1-2 business days for domestic wires and 2-5 days for international wires before they are available for trading. We accept USD, EUR, CAD, JPY, CHF, AUD and GBP. FOREX.com does not charge fees for income wires. However, your bank may charge a service fee. Wire transfers that involve a bank outside of the US may require an intermediary US bank. US intermediary banks may charge a transaction fee.

Personal or Business Check
There is no minimum or maximum deposit amount for checks. A check may take up to 5-10 business days from the receipt of the check to be posted to your account. We accept USD.

We recommend that you maintain an adequate excess margin balance above your required margin. Maintaining low excess margin levels in your account may prohibit you from trading certain products or lead to undesired liquidations resulting from an adverse market move.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        What are current Margin Requirements?
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Our margin requirements differ according to platform (FOREX.com or MetaTrader), market, asset class and position size. You can find the specific margin of each instrument in its Market Information Sheet on the FOREX.com desktop platform or view our list of margin requirements by product.

To calculate the amount of funds required to cover the margin requirement when you open a trade, simply multiply the total notional value of your trade (quantity x price of instrument) by the margin factor.

For example, say the margin requirement for EURUSD is 2%. The current buy price of EURUSD is 1.300 and you wish to buy 1 standard lot (100,000).

The total value of the position is $130,000 (100,000 x 1.300). $2,600 would therefore be allocated from your account to open the position ($130,000 x 2%).

With FOREX.com platforms, you can calculate the required margin before placing a trade through the platform’s margin calculator, monitor each position’s margin requirement separately or review your account’s total margin requirement through the Margin Indicator.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        What is a ‘limit down’?
                      </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        A limit down price is the maximum sell-off permitted in a market on a single day of trading. Once this level has been reached, trading on the market may then be restricted to prevent significant volatility and potential panic selling. A limit down price is typically determined as a percentage decline in a given market, rather than a nominal decline in price.

A limit down period is imposed by an exchange (such as the NYSE) and not by brokers. It usually lasts 15 minutes but may be extended depending on the percentage decline before market open.

Please note that a limit down only restricts selling on the affected market(s).
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        What is slippage?
                      </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        Slippage is when an order is filled at a price other than the requested price.

Our quoted prices are executable the majority of the time. In fast-moving markets, orders may be executed at a price which has ceased to be the best market price. Limit orders will always be filled at the price asked or better.
                      </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </section>
    @include('home/section8')
</main>
@endsection