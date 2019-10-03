# FuelPHP1.8.0×PHP5.6
Set up your environment variables.
`cp .env.example .env`

Then run the docker.
`docker-compose up`

# Benchmark
Fibonacci

| times | Memory Usage (start - finish) | Memory Peak Usage (start - finish) | Elapsed Time |
| :--- | :--- | :--- | :--- |
| 1 | 2.1102828979492MB - 2.1103134155273MB | 2189.5703125KB - 2189.5703125KB | 50.266472816467 sec |
| 2 | 2.1102828979492MB - 2.1103134155273MB | 2189.5703125KB - 2189.5703125KB | 50.793169021606 sec |
| 3 | 2.1103210449219MB - 2.1103515625MB | 2189.8671875KB - 2189.8671875KB | 52.034828901291 sec |