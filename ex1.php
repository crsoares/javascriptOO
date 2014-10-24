<script>
	var car = {};

	Object.defineProperty(car, 'doors', {
		configurable: true,
		value: 4
	});

	Object.defineProperty(car, 'wheels', {
		configurable: false,
		value: 4
	});

	console.log(car);

	delete car.doors;

	console.log(car.doors);

	delete car.wheels;

	console.log(car.wheels);

	Object.defineProperty(car, 'doors', {
		configurable: true,
		value: 5
	});	

	console.log(car.doors);

	Object.defineProperty(car, 'wheels', {
		configurable: true,
		value: 4
	});
</script>
