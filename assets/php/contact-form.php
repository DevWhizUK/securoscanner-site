<form id="contactForm" class="space-y-4">
    <select name="topic" class="w-full p-2 border border-gray-300 rounded">
        <option>General Questions and Comments</option>
        <option>Technical Support and Troubleshooting</option>
        <option>Complaints</option>
        <option>SecuroScanner Job Enquiries</option>
        <option>Other</option>
    </select>
    <input type="text" name="name" placeholder="Name *" required class="w-full p-2 border border-gray-300 rounded">
    <input type="email" name="email" placeholder="Email Address *" required
        class="w-full p-2 border border-gray-300 rounded">
    <input type="tel" name="phone" placeholder="Phone Number" class="w-full p-2 border border-gray-300 rounded">
    <textarea name="message" rows="4" placeholder="Message *" required
        class="w-full p-2 border border-gray-300 rounded"></textarea>
    <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Submit</button>
</form>