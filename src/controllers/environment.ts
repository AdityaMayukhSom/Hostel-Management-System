import dotenv from 'dotenv';
dotenv.config();

export const port: number = Number.parseInt(process.env.PORT || '3000')