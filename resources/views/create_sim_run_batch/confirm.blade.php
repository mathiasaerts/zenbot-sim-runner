<x-layout>
    <h2>Confirm sim runs for batch</h2>
    <form method="post" action="/sim-run-batch">
        @csrf
        <h2>Sim run quantities</h2>
        <ul>
            @foreach($strategies as $strategy)
            <li>
                {{ $strategy->name }}: {{ count($strategy->sim_runs) }}
            </li>
            @endforeach
        </ul>
        @foreach($strategies as $strategy)
        <h2>Sim run detail</h2>
        <h3>{{ $strategy->name }}</h3>
        <table>
            <thead>
                <tr>
                    @foreach($strategy->options as $option)
                    <th>{{ $option->name }}</th>
                    @endforeach
                    <th>
                </tr>
            </thead>
            <tbody>
                @foreach($strategy->sim_runs as $sim_run)
                <tr>
                    @foreach($strategy->options as $option)
                    <td>GET CUSTOM VALUE IF SUPPLIED, OTHERWISE DEFAULT<br /><br /> ALSO HIGHLIGHT USER VALUES</td>
                    @endforeach
                    <td>
                        <input 
                            type="checkbox" 
                            id="" 
                            name="" 
                            value=""
                        >            
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endforeach
        <input type="submit" value="Submit">
    </form>    
</x-layout>