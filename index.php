<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Whimsey Tech - Pay with M-Pesa</title>
  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'whimsey-primary': '#0066FF',
            'whimsey-dark': '#003399',
            'whimsey-light': '#66B2FF',
            'whimsey-gray': '#F2F2F2',
            'whimsey-white': '#FFFFFF'
          },
          fontFamily: {
            'sans': ['Poppins', 'sans-serif']
          }
        }
      }
    }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-whimsey-primary via-whimsey-light to-whimsey-primary min-h-screen flex items-center justify-center p-4">

  <div class="bg-whimsey-white rounded-3xl shadow-2xl p-10 w-full max-w-md mx-auto transform transition hover:scale-105 duration-300">

    <!-- Branding -->
    <div class="text-center mb-10">
      <h1 class="text-4xl font-bold text-whimsey-primary mb-2 tracking-wide">Whimsey Tech</h1>
      <p class="text-gray-500">Pay securely with M-Pesa</p>
    </div>

    <!-- Form -->
    <form method="POST" action="stkpush.php" class="space-y-6">

      <!-- Phone -->
      <div class="relative">
        <input type="text" name="phone" required
               class="peer w-full border border-whimsey-gray rounded-2xl px-5 pt-6 pb-4 text-whimsey-dark placeholder-transparent focus:outline-none focus:ring-2 focus:ring-whimsey-primary focus:border-whimsey-primary transition duration-200 shadow-md text-lg" 
               placeholder="Phone Number">
        <label class="absolute left-5 top-3 text-gray-400 text-sm transition-all peer-placeholder-shown:top-6 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base peer-focus:top-2 peer-focus:text-whimsey-primary peer-focus:text-sm font-medium">
          Phone Number
        </label>
      </div>

      <!-- Amount -->
      <div class="relative">
        <input type="number" name="amount" required
               class="peer w-full border border-whimsey-gray rounded-2xl px-5 pt-6 pb-4 text-whimsey-dark placeholder-transparent focus:outline-none focus:ring-2 focus:ring-whimsey-primary focus:border-whimsey-primary transition duration-200 shadow-md text-lg" 
               placeholder="Amount">
        <label class="absolute left-5 top-3 text-gray-400 text-sm transition-all peer-placeholder-shown:top-6 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base peer-focus:top-2 peer-focus:text-whimsey-primary peer-focus:text-sm font-medium">
          Amount
        </label>
      </div>

      <!-- Submit Button -->
      <button type="submit"
              class="w-full py-4 bg-gradient-to-r from-whimsey-primary to-whimsey-light text-whimsey-white font-bold rounded-2xl hover:scale-105 hover:shadow-lg transform transition duration-300 text-lg">
        Pay Now
      </button>

    </form>

    <!-- Footer -->
    <div class="text-center mt-10 border-t border-gray-200 pt-6">
      <p class="text-whimsey-dark font-semibold text-sm md:text-base">
        © 2025 Crafted with passion by 
        <span class="text-whimsey-primary font-bold">Alex Joseph</span>. 
        All rights reserved.
      </p>
    </div>

  </div>

</body>
</html>
