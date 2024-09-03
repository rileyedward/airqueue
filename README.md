# AirQueue

AirQueue is a platform designed to enhance your music-sharing experience with friends through interactive Live Sessions. Integrating seemlessly with the Spotify Developer API to search for songs, as well as interact with the user's Spotify account.

## Getting Started

### Prerequisites

Ensure you have the following prerequisites installed on your system. You can verify each installation by running the provided commands in your terminal.

1. **PHP** is required for the application. Check if PHP is installed by running:

	```bash
	php --version
	```

2. **Composer** is necessary for managing PHP dependencies. Verify its installation with:

	```bash
	composer --version
	```

3. **Docker** is used for containerization. Confirm Docker is installed by running:

	```bash
	docker --version
	```

4. **Node** and **NPM** (Node Package Manager) are needed for managing frontend dependencies. Check their installations with:

	```bash
	node --version
	npm --version
	```

### Installation

1. Duplicate the example environment file and configure it with your settings:

	```bash
	cp .env.example .env
	```

2. Install PHP and JavaScript dependencies:

	```bash
	composer install
	npm install
	```

3. Generate a new PHP application key:

	```bash
	php artisan key:generate
	```

4. Use Sail to build and start the application:

	```bash
	./vendor/bin/sail up -d
	```

5. Apply database migrations:

	```bash
	sail artisan migrate
	```

6. Compile assets and run the Vue frontend:

	```bash
	npm run dev
	```

## Usage

### Live Sessions

Start or join a Live Session using a Session ID and an optional passcode to share music with others. You can view incoming song requests from other participants and search for songs to request from them.

### Bands

Bands in AirQueue make it easy to share music and start Live Sessions with friends. You can join a Band via an invitation from the owner or create your own Band and invite others to share music together.

### Song Requests

When you receive a song request, you can choose to approve or deny it. Denying a request removes it from your queue, while approving a request adds the song to your live Spotify player’s queue.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE.txt) file for more details.

