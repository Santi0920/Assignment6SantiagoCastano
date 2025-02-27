import cgi
import sys
import json

def process_numbers(numbers):
    try:
        numbers = [float(num) for num in numbers if num.replace('.', '', 1).isdigit() or num.lstrip('-').isdigit()]
        
        if len(numbers) < 5:
            return {"error": "Invalid input. Please enter exactly five numbers."}

        has_negative = any(num < 0 for num in numbers)
        negative_message = "Warning: One or more values are negative." if has_negative else "All numbers are non-negative."

        avg = sum(numbers) / len(numbers)
        avg_message = f"Average: {avg:.2f} (Greater than 50)" if avg > 50 else f"Average: {avg:.2f} (Less than or equal to 50)"

        positive_count = sum(1 for num in numbers if num > 0)
        even_or_odd = "Even" if positive_count % 2 == 0 else "Odd"

        filtered_values = sorted([num for num in numbers if num > 10])

        return {
            "original": numbers,
            "sorted": filtered_values,
            "negative_message": negative_message,
            "avg_message": avg_message,
            "positive_count_message": f"Count of positive numbers is {positive_count}, which is {even_or_odd}."
        }
    except Exception as e:
        return {"error": f"Error processing input: {str(e)}"}

if __name__ == "__main__":
    form = cgi.FieldStorage()
    numbers = [form.getvalue(f"{char}") for char in "abcde"]

    if not any(numbers):
        numbers = sys.argv[1:]

    result = process_numbers(numbers)
    print(json.dumps(result))
