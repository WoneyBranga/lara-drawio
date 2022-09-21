<div>
    <ul>
        @forelse ($topologias as $topologia)
            <li>
                ID: {{ $topologia->id }} - Obs: {{ $topologia->observacao }}
                <hr>
                <img alt="teste"
                     class="scale-50 rounded border-4 border-gray-300 p-4 shadow-lg hover:scale-100"
                     id="image"
                     onclick="edit(this, {{ $topologia->id }});"
                     src="{{ $topologia->imagem }}"
                     style="max-width:100%;cursor:pointer;"
                     wire:key={{ $topologia->id }} />
            </li>
        @empty
            <li>Sem Topologias</li>
        @endforelse
    </ul>

    <script type="text/javascript">
        // https://www.diagrams.net/doc/faq/supported-url-parameters
        // se chamarmos um HTTPS interno, teremos problema num primeiro acesso em decorrencia da necessidade de se aceitar SSL;
        var editor =
            'http://localhost:8080/?embed=1&ui=kennedy&spin=1&proto=json&math=0&libs=Rascunho&stealth=1&lang=pt-br&libs=basic;general';
        // var editor ='https://localhost:8443/?embed=1&ui=kennedy&spin=1&proto=json&browser=0&ruler=1&math=0&stealth=1&lang=pt-br&splash=0&mode=browser&clibs=Uhttps%3A%2F%2F10.48.103.180%2FgdeMonitor%2FDEV%2FRascunho.xml';
        var initial = null;
        var name = null;

        function edit(image, id_image) {
            var iframe = document.createElement('iframe');
            iframe.setAttribute('frameborder', '0');

            var close = function() {
                window.removeEventListener('message', receive);
                document.body.removeChild(iframe);
            };

            var receive = function(evt) {
                if (evt.data.length > 0) {
                    var msg = JSON.parse(evt.data);

                    if (msg.event == 'init') {

                        iframe.contentWindow.postMessage(JSON.stringify({
                            action: 'load',
                            autosave: 1,
                            xmlpng: image.getAttribute('src')
                        }), '*');
                    } else if (msg.event == 'export') {
                        image.setAttribute('src', msg.data);

                        Livewire.emit('update', id_image, msg.data);
                        close();
                    } else if (msg.event == 'save') {
                        iframe.contentWindow.postMessage(JSON.stringify({
                            action: 'export',
                            format: 'xmlpng',
                            xml: msg.xml,
                            spin: 'Updating page'
                        }), '*');

                    } else if (msg.event == 'exit') {
                        close();
                    }
                }
            };

            window.addEventListener('message', receive);
            iframe.setAttribute('src', editor);
            document.body.appendChild(iframe);
        };
    </script>

</div>
