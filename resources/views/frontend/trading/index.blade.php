<x-app-layout>
    <!-- TradingView Widget BEGIN -->
    <div class="py-12">
        <h1>Trading</h1>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg" style="height: 60vh">
                <div class="tradingview-widget-container" style="height:100%;width:100%">
                    <div class="tradingview-widget-container__widget" style="100%;width:100%"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                        {
                            "autosize": false,
                            "symbol": "NASDAQ:AAPL",
                            "interval": "D",
                            "timezone": "Etc/UTC",
                            "theme": "light",
                            "style": "1",
                            "locale": "en",
                            "enable_publishing": false,
                            "allow_symbol_change": true,
                            "calendar": false,
                            "support_host": "https://www.tradingview.com"
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- TradingView Widget END -->
</x-app-layout>
