# FuelPHP1.8.2×PHP7.3
Set up your environment variables.
`cp .env.example .env`

Then run the docker.
`docker-compose up`

# Benchmark
Fibonacci

| times | Memory Usage (start - finish) | Memory Peak Usage (start - finish) | Elapsed Time |
| :--- | :--- | :--- | :--- |
| 1 | 2.305046081543MB - 2.305046081543MB | 2435.359375KB 2435.359375KB | 14.057328939438 sec |
| 2 | 2.305046081543MB - 2.305046081543MB | 2435.359375KB - 2435.359375KB | 13.925102949142 sec |
| 3 | 2.3050308227539MB - 2.3050308227539MB | 2435.34375KB - 2435.34375KB | 14.02751493454 sec |